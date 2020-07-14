import React from 'react';
import StepCounter from "../StepCounter";

export default ({ step, maxStep }) => {
  return (
    <div>
      <StepCounter step={step} maxStep={maxStep} />
    </div>
  )
};
