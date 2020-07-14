import React from 'react';
import useBrand from "./hooks/useBrand";

export default () => {
  const { brands, error } = useBrand();
  console.log(brands);

  return (
    <div>
      Hello World
    </div>
  );
}
