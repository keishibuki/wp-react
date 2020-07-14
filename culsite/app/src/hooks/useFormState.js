import React from 'react';
import { useForm } from 'react-hook-form';

export default () => {
  const formContextValues = useForm();
  const [step, setStep] = React.useState(1);
  const [data, setData] = React.useState();

  const backStep = () => {
    setStep(step - 1);
    setData(prevData => ({
      ...prevData,
      ...formValues,
    }));
  };
  const nextStep = (formValues) => {
    setStep(step + 1);
    setData(prevData => ({
      ...prevData,
      ...formValues,
    }));
  };

  return { formContextValues, step, backStep, nextStep };
};
