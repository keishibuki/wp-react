import React from 'react';
import useBrand from "./hooks/useBrand";
import useFormState from "./hooks/useFormState";
import Count from './components/Count';
import Step1 from "./components/form/Step1";
import Step2 from "./components/form/Step2";
import Step3 from "./components/form/Step3";
import Step4 from "./components/form/Step4";

export default () => {
  const [price, setPrice] = React.useState(0);
  const { brands, loading, error } = useBrand();
  const { data, formContextValues, initialStep, step, maxStep, nextStep, backStep } = useFormState({ max: 4 });
  const { handleSubmit, trigger, getValues, register } = formContextValues;

  if (loading) return <div>Loading...</div>;

  return (
    <div>
      <div><Count from={0} to={price} /></div>
      {brands ? (
        <form className="form">
          {step === 1 ? <Step1 register={register} price={price} setPrice={setPrice} step={step} maxStep={maxStep} brands={brands} data={data} /> : null}
          {step === 2 ? <Step2 register={register} price={price} setPrice={setPrice} step={step} maxStep={maxStep} brands={brands} data={data} /> : null}
          {step === 3 ? <Step3 register={register} price={price} setPrice={setPrice} step={step} maxStep={maxStep} brands={brands} data={data} /> : null}
          {step === 4 ? <Step4 register={register} price={price} setPrice={setPrice} step={step} maxStep={maxStep} brands={brands} data={data} /> : null}
          <div className="button">
            {step > initialStep ? <button type="button" onClick={() => backStep(getValues())}>戻る</button> : null}
            {step < maxStep ? (
              <button
                type="button"
                onClick={async () => {
                  if (await trigger()) nextStep(getValues());
                }}>
                次へ
              </button>
            ): null}
          </div>
        </form>
      ) : null}
    </div>
  );
}
