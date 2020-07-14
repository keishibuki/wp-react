import React from 'react';
import { useForm } from 'react-hook-form';

export default ({ max, initialStep = 1 }) => {
  const maxStep = max;
  const formContextValues = useForm();
  const [step, setStep] = React.useState(initialStep);
  const [data, setData] = React.useState();

  const backStep = (formValues) => {
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

  return { data, formContextValues, initialStep, step, maxStep, backStep, nextStep };
};
