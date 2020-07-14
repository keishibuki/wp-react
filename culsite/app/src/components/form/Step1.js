import React from 'react';
import StepCounter from "../StepCounter";

export default ({ register, setPrice, step, maxStep, brands, data }) => {
  return (
    <div>
      <StepCounter step={step} maxStep={maxStep} />
      {
        brands.map(brand => {
          return (
            <label key={brand.id}>
              <input
                type="radio"
                name="brand"
                value={brand.id}
                ref={register({ required: '選択してください' })}
                defaultChecked={(data && data.brand) ? data.brand.toString() === brand.id.toString() : false}
                onChange={(e) => setPrice(Number(brand.acf.brand_price))}
              />
              <p>{brand.title.rendered}</p>
            </label>
          );
        })
      }
    </div>
  )
};
