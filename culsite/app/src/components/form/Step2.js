import React from 'react';
import StepCounter from "../StepCounter";

export default ({ register, setPrice, step, maxStep, brands, data }) => {
  const [colorPrice, setColorPrice] = React.useState(0);
  const brand = brands.find(b => (data && data.brand) ? b.id.toString() === data.brand.toString() : false);

  return (
    <div>
      <StepCounter step={step} maxStep={maxStep} />
      {brand.acf.color.map((c) => {
        return (
          <label key={c.color_id}>
            <input
              type="radio"
              name="color"
              value={c.color_id}
              ref={register({ required: '選択してください' })}
              defaultChecked={(data && data.color) ? data.color === c.color_id : false}
              onChange={(e) => {
                const price = Number(c.color_price);
                setColorPrice(price);
                setPrice(prevPrice => setPrice(prevPrice - colorPrice + price));
              }}
            />
            <p>{c.color_id}</p>
          </label>
        );
      })}
    </div>
  )
};
