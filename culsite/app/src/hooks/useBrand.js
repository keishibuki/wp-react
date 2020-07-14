import { useState, useEffect } from 'react';

export default () => {
  const [brands, setBrands] = useState();
  const [error, setError] = useState();

  const fetchBrands = async () => {
    try {
      const res = await fetch('http://detailbase.local/wp-json/wp/v2/brand');
      const data = await res.json();
      setBrands(data);

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

  return { error, brands };
};
