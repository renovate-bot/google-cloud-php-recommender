<?php
/*
 * Copyright 2022 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * This file was automatically generated - do not edit!
 */

require_once __DIR__ . '/../../../vendor/autoload.php';

// [START recommender_v1_generated_Recommender_UpdateRecommenderConfig_sync]
use Google\ApiCore\ApiException;
use Google\Cloud\Recommender\V1\RecommenderClient;
use Google\Cloud\Recommender\V1\RecommenderConfig;

/**
 * Updates a Recommender Config. This will create a new revision of the
 * config.
 *
 * This sample has been automatically generated and should be regarded as a code
 * template only. It will require modifications to work:
 *  - It may require correct/in-range values for request initialization.
 *  - It may require specifying regional endpoints when creating the service client,
 *    please see the apiEndpoint client configuration option for more details.
 */
function update_recommender_config_sample(): void
{
    // Create a client.
    $recommenderClient = new RecommenderClient();

    // Prepare the request message.
    $recommenderConfig = new RecommenderConfig();

    // Call the API and handle any network failures.
    try {
        /** @var RecommenderConfig $response */
        $response = $recommenderClient->updateRecommenderConfig($recommenderConfig);
        printf('Response data: %s' . PHP_EOL, $response->serializeToJsonString());
    } catch (ApiException $ex) {
        printf('Call failed with message: %s' . PHP_EOL, $ex->getMessage());
    }
}
// [END recommender_v1_generated_Recommender_UpdateRecommenderConfig_sync]
