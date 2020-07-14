import React from 'react';

export default ({ from, to, duration = 500 }) => {
  const [number, setNumber] = React.useState(from);
  const [animating, setAnimating] = React.useState(false);
  const startTime = Date.now();

  React.useEffect(() => {
    const timer = setInterval(() => {
      const elapsedTime = Date.now() - startTime;
      const progress = elapsedTime / duration;

      if (progress < 1) {
        setNumber(Math.floor(from + progress * (to - from)));
      } else {
        setNumber(to);
        setAnimating(false);
        clearInterval(timer);
      }
    }, 16);
  }, [to]);

  return <div>{number.toLocaleString()}</div>;
};
