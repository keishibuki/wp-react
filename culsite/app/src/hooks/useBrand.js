import { useState, useEffect } from 'react';

export default () => {
  const [brands, setBrands] = useState();
  const [loading, setLoading] = useState(false);
  const [error, setError] = useState();

  const fetchBrands = async () => {
    try {
      setLoading(true);
      const res = await fetch('http://detailbase.local/wp-json/wp/v2/brand');
      const data = await res.json();
      setBrands(data);
      setLoading(false);

      return data;
    } catch (e) {
      setError(e);
      console.error(e);
    }
  };

  useEffect(() => {
    (async () => {
      await fetchBrands();
    })();

    // eslint-disable-next-line
  }, []);

  return { error, loading, brands };
};
