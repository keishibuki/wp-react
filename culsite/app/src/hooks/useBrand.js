import { useState, useEffect } from 'react';

export default () => {
  const [brands, setBrands] = useState();

  const fetchBrands = async () => {
    try {
      const res = await fetch('http://detailbase.local/wp-json/wp/v2/brand');

      return res.json();
    } catch (e) {
      console.error(e);
    }
  };

  useEffect(() => {
    (async () => {
      const res = await fetchBrands();
      console.log(res);
    })();

    // eslint-disable-next-line
  }, []);
};
