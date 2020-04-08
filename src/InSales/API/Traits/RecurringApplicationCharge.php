<?php

namespace InSales\API\Traits;

use InSales\API\ApiResponse;

/**
 * Trait RecurringApplicationCharge Часть API-клиента, отвечающая за автоматические списания
 * @package InSales\Traits
 * @mixin \InSales\API\ApiClient
 */
trait RecurringApplicationCharge
{
    /**
     * Create
     * @param array $data
     * @return \InSales\API\ApiResponse
     */
    public function createRecurringApplicationCharge(array $data): ApiResponse
    {
        return $this->client->executeCreateRequest(
            $this->generateUrl(self::API_URL_RECURRING_APPLICATION_CHARGE),
            $data
        );
    }

    /**
     * Destroy
     * @return \InSales\API\ApiResponse
     */
    public function destroyRecurringApplicationCharge()
    {
        $url = $this->generateUrl(self::API_URL_RECURRING_APPLICATION_CHARGE);
        return $this->client->executeRemoveRequest($url, self::API_URL_RECURRING_APPLICATION_CHARGE);
    }

    /**
     * Get
     * @return \InSales\API\ApiResponse
     */
    public function getRecurringApplicationCharge(): ApiResponse
    {
        return $this->client->executeListRequest(
            $this->generateUrl(self::API_URL_RECURRING_APPLICATION_CHARGE)
        );
    }

    /**
     * Update
     * @param array $data
     * @return \InSales\API\ApiResponse
     */
    public function updateRecurringApplicationCharge(array $data)
    {
        $url = $this->generateUrl(self::API_URL_RECURRING_APPLICATION_CHARGE);
        return $this->client->executeUpdateRequest($url, $data);
    }

    /**
     * Add free days
     * @param integer $id
     * @return \InSales\API\ApiResponse
     */
    public function addFreeDaysRecurringApplicationCharge(array $data)
    {
        $url = $this->generateUrl(self::API_URL_RECURRING_APPLICATION_CHARGE);
        $url = str_replace('.json', "/add_free_days.json", $url);
        return $this->client->executePatchRequest($url, $data);
    }

}
