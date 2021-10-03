<?php

namespace Leit040\Cars\Cars;

trait legalization
{
private string $registrationPlate;
private string $insurancePolicy;
private string $insurancePolicyExpiration;


    /**
     * @return string
     */
    public function getInsurancePolicy(): string
    {
        return $this->insurancePolicy;
    }

    /**
     * @param string $insurancePolicy
     */
    public function setInsurancePolicy(string $insurancePolicy): void
    {
        $this->insurancePolicy = $insurancePolicy;
    }

    /**
     * @return string
     */
    public function getRegistrationPlate(): string
    {
        return $this->registrationPlate;
    }

    /**
     * @param string $registrationPlate
     */
    public function setRegistrationPlate(string $registrationPlate): void
    {
        $this->registrationPlate = $registrationPlate;
    }

    /**
     * @return string
     */
    public function getInsurancePolicyExpiration(): string
    {
        return $this->insurancePolicyExpiration;
    }

    /**
     * @param string $insurancePolicyExpiration
     */
    public function setInsurancePolicyExpiration(string $insurancePolicyExpiration): void
    {
        $this->insurancePolicyExpiration = $insurancePolicyExpiration;
    }

}