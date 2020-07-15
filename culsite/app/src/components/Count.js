import React from 'react';

export default ({ from, to, duration = 500 }) => {
  const [number, setNumber] = React.useState(from);
  const startTime = Date.now();

  React.useEffect(() => {
    const timer = setInterval(() => {
      const elapsedTime = Date.now() - startTime;
      const progress = elapsedTime / duration;

      // 単調になるのでTweenMaxなどで緩急を付けたほうが良いかも
      // フォントによってはガタガタになるので、等幅フォントを使うと良いかも
      if (progress < 1) {
        setNumber(Math.floor(from + progress * (to - from)));
      } else {
        setNumber(to);
        clearInterval(timer);
      }
    }, 16);
  }, [to]);

  return <div>{number.toLocaleString()}</div>;
};
