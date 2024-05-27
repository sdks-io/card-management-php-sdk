<?php

declare(strict_types=1);

/*
 * ShellCardManagementAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellCardManagementAPIsLib\Controllers;

use Core\Request\Parameters\BodyParam;
use Core\Request\Parameters\HeaderParam;
use Core\Response\Types\ErrorType;
use CoreInterfaces\Core\Request\RequestMethod;
use ShellCardManagementAPIsLib\Exceptions\ApiException;
use ShellCardManagementAPIsLib\Exceptions\ErrorObjectException;
use ShellCardManagementAPIsLib\Models\AccountRestrictionRequest;
use ShellCardManagementAPIsLib\Models\AccountRestrictionResponse;
use ShellCardManagementAPIsLib\Models\CreateBundleRequest;
use ShellCardManagementAPIsLib\Models\CreateBundleResponse;
use ShellCardManagementAPIsLib\Models\DeleteBundleRequest;
use ShellCardManagementAPIsLib\Models\DeleteBundleResponse;
use ShellCardManagementAPIsLib\Models\RestrictionCardRequest;
use ShellCardManagementAPIsLib\Models\RestrictionCardResponse;
use ShellCardManagementAPIsLib\Models\RestrictionSearchCardRequest;
use ShellCardManagementAPIsLib\Models\RestrictionSearchCardResponse;
use ShellCardManagementAPIsLib\Models\SearchAccountLimitRequest;
use ShellCardManagementAPIsLib\Models\SearchAccountLimitResponse;
use ShellCardManagementAPIsLib\Models\SummaryOfBundleRequest;
use ShellCardManagementAPIsLib\Models\SummaryOfBundleResponse;
use ShellCardManagementAPIsLib\Models\UpdateBundleRequest;
use ShellCardManagementAPIsLib\Models\UpdateBundleResponse;

class RestrictionController extends BaseController
{
    /**
     * This API enables clients to create a new card bundle and apply restrictions.
     *
     * #### Supported operations
     *
     * * Create bundle and include mandatory -
     *
     * * Usage, day/time, product and location restrictions
     *
     * * List of cards to add to bundle
     *
     * * Create bundle and include optional identifier of bundle in external system
     *
     * #### Validation rules
     *
     * The following are the key validation rules with the associated error codes for failed validation-
     *
     * * `7012` - At least one card must be added to the bundle
     *
     * *  `7011` - The total number of cards passed in the input must be 500 or less.
     *
     * *  `7014` - All the cards passed in the input are part of the selected account.
     *
     * *  `7013` - At least one restriction must be applied to the bundle i.e. either of usage, day/time,
     * location or product restriction.
     *
     * *  `7005` - Day time restriction cannot be set to restrict the use of a card on all days of the
     * week.
     *
     * *  `7000` - Usage restriction of the bundle is not open ended i.e. all the limits within the usage
     * restriction must not be set to 0/null.
     *
     * *  `7004` - In the usage restrictions, the limits per transaction should be less than or equal to
     * Daily, Daily should be less than or equal to Weekly, Weekly should be less than or equal to Monthly.
     * Exception being 0/blank will be skipped, i.e. Daily value should be less than equal to Monthly value
     * if Weekly value is 0/blank.
     *
     * *  `0007` - Error returned if request parameters fail validation e.g. mandatory check.
     *
     * @param string $requestId Mandatory UUID (according to RFC 4122 standards) for requests and
     *        responses. This will be played back in the response from the request.
     * @param CreateBundleRequest|null $body Create Bundle Request body
     *
     * @return CreateBundleResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function restrictionBundleCreate(string $requestId, ?CreateBundleRequest $body = null): CreateBundleResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/card-restrictions/v1/bundles/create')
            ->auth('BearerToken')
            ->parameters(
                HeaderParam::init('RequestId', $requestId),
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '400',
                ErrorType::init(
                    "The server cannot or will not process the request due to something that is" .
                    " perceived to be a client error (e.g., malformed request syntax, invalid re" .
                    "quest message framing, or deceptive request routing).\n",
                    ErrorObjectException::class
                )
            )
            ->throwErrorOn(
                '401',
                ErrorType::init(
                    "The request has not been applied because it lacks valid  authentication cr" .
                    "edentials for the target resource.\n",
                    ErrorObjectException::class
                )
            )
            ->throwErrorOn('403', ErrorType::init('Forbidden', ErrorObjectException::class))
            ->throwErrorOn(
                '404',
                ErrorType::init(
                    "The origin server did not find a current representation  for the target re" .
                    "source or is not willing to disclose  that one exists.\n",
                    ErrorObjectException::class
                )
            )
            ->throwErrorOn(
                '500',
                ErrorType::init(
                    "The server encountered an unexpected condition that  prevented it from ful" .
                    "filling the request.\n",
                    ErrorObjectException::class
                )
            )
            ->type(CreateBundleResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * This API enables clients to update an existing card bundle and its associated restrictions.
     *
     * #### Supported operations
     *
     * * Add new cards to an existing bundle
     *
     * * Remove cards from existing bundle
     *
     * * Update restrictions applied to existing bundle
     *
     *
     *
     * The following are the key validation rules with the associated error codes for failed validation-
     *
     *
     * #### Validation rules
     *
     * *  `9007` - The cards must exist in the cards platform for adding or removing cards.
     *
     * *  `7014` - All the cards passed in the input are part of the selected account.
     *
     * *  `7018` - All the cards passed in the input are part of the selected bundle.
     *
     * *  `7011` - The total number of cards passed in the input must be 500 or less.
     *
     * *  `7012` - The action to remove cards should not result in removing all the cards from the bundle.
     *
     * *  `7016` - At least one restriction must be modified for â€œUpdateâ€ request action.
     *
     * *  `7013` - All restrictions cannot be marked for â€œResetâ€ for â€œUpdateâ€ request action.
     *
     * *  `7005` - Day time restriction cannot be set to restrict the use of a card on all days of the
     * week. This validation is applicable for Update request action.
     *
     * *  `7000` - Usage restriction of the bundle is not open ended i.e., all the limits within the
     * usage restriction must not be set to 0/null. This validation is applicable for Update request action.
     *
     * *  `7004` - In the usage restrictions, the limits per transaction should be less than or equal to
     * Daily, Daily should be less than or equal to Weekly, Weekly should be less than or equal to Monthly.
     * Exception being 0/blank will be skipped, i.e., Daily value should be less than equal to Monthly
     * value if Weekly value is 0/blank. This validation is applicable for Update request action.
     *
     * *  `0007` - Error returned if request parameters fail validation e.g. at least one card must be
     * provided in the input.
     *
     * @param string $requestId Mandatory UUID (according to RFC 4122 standards) for requests and
     *        responses. This will be played back in the response from the request.
     * @param UpdateBundleRequest|null $body Update Bundle Request body
     *
     * @return UpdateBundleResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function restrictionBundleUpdate(string $requestId, ?UpdateBundleRequest $body = null): UpdateBundleResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/card-restrictions/v1/bundles/update')
            ->auth('BearerToken')
            ->parameters(
                HeaderParam::init('RequestId', $requestId),
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '400',
                ErrorType::init(
                    "The server cannot or will not process the request due to something that is" .
                    " perceived to be a client error (e.g., malformed request syntax, invalid re" .
                    "quest message framing, or deceptive request routing).\n",
                    ErrorObjectException::class
                )
            )
            ->throwErrorOn(
                '401',
                ErrorType::init(
                    "The request has not been applied because it lacks valid  authentication cr" .
                    "edentials for the target resource.\n",
                    ErrorObjectException::class
                )
            )
            ->throwErrorOn('403', ErrorType::init('Forbidden', ErrorObjectException::class))
            ->throwErrorOn(
                '404',
                ErrorType::init(
                    "The origin server did not find a current representation  for the target re" .
                    "source or is not willing to disclose  that one exists.\n",
                    ErrorObjectException::class
                )
            )
            ->throwErrorOn(
                '500',
                ErrorType::init(
                    "The server encountered an unexpected condition that  prevented it from ful" .
                    "filling the request.\n",
                    ErrorObjectException::class
                )
            )
            ->type(UpdateBundleResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * This API enables clients to delete an existing card bundle in the Shell Card Platform. Once the card
     * bundle is deleted the usage and product restrictions of the cards that were present in the bundle
     * will be reset based on the request.
     *
     * #### Supported operations
     *
     * * Delete card bundle by bundle Id
     *
     * #### Validation rules
     *
     * The following are the key validation rules with the associated error codes for failed validation-
     *
     * *  `7019` - The given card bundle is not available in the Shell Card Platform.
     *
     * *  `0007` - Error returned if request parameters fail validation e.g. mandatory check.
     *
     * @param string $requestId Mandatory UUID (according to RFC 4122 standards) for requests and
     *        responses. This will be played back in the response from the request.
     * @param DeleteBundleRequest|null $body Delete Bundle Request body
     *
     * @return DeleteBundleResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function restrictionBundleDelete(string $requestId, ?DeleteBundleRequest $body = null): DeleteBundleResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/card-restrictions/v1/bundles/delete')
            ->auth('BearerToken')
            ->parameters(
                HeaderParam::init('RequestId', $requestId),
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '400',
                ErrorType::init(
                    "The server cannot or will not process the request due to something that is" .
                    " perceived to be a client error (e.g., malformed request syntax, invalid re" .
                    "quest message framing, or deceptive request routing).\n",
                    ErrorObjectException::class
                )
            )
            ->throwErrorOn(
                '401',
                ErrorType::init(
                    "The request has not been applied because it lacks valid  authentication cr" .
                    "edentials for the target resource.\n",
                    ErrorObjectException::class
                )
            )
            ->throwErrorOn('403', ErrorType::init('Forbidden', ErrorObjectException::class))
            ->throwErrorOn(
                '404',
                ErrorType::init(
                    "The origin server did not find a current representation  for the target re" .
                    "source or is not willing to disclose  that one exists.\n",
                    ErrorObjectException::class
                )
            )
            ->throwErrorOn(
                '500',
                ErrorType::init(
                    "The server encountered an unexpected condition that  prevented it from ful" .
                    "filling the request.\n",
                    ErrorObjectException::class
                )
            )
            ->type(DeleteBundleResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * This API allows clients to get a summary of card bundles associated with Payer/Account. This API
     * will return the basic bundle details including card and restriction details. Optionally the API will
     * also include a count of cards that are not associated with the bundle but returned by the search
     * criteria.
     *
     *
     *
     * Note - to include count of cards of an account that are not associated with any bundles, in the
     * input parameter SearchCardBundles either pass all the bundles of the account in the list or pass
     * only account with bundle id left blank/null.
     *
     *
     *
     * #### Supported operations
     *
     * * Get summary of bundles by list of bundle Ids
     *
     * @param string $requestId Mandatory UUID (according to RFC 4122 standards) for requests and
     *        responses. This will be played back in the response from the request.
     * @param SummaryOfBundleRequest|null $body Summary Bundle Request body
     *
     * @return SummaryOfBundleResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function restrictionBundleSummary(
        string $requestId,
        ?SummaryOfBundleRequest $body = null
    ): SummaryOfBundleResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/card-restrictions/v1/bundles/Summary')
            ->auth('BearerToken')
            ->parameters(
                HeaderParam::init('RequestId', $requestId),
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '400',
                ErrorType::init(
                    "The server cannot or will not process the request due to something that is" .
                    " perceived to be a client error (e.g., malformed request syntax, invalid re" .
                    "quest message framing, or deceptive request routing).\n",
                    ErrorObjectException::class
                )
            )
            ->throwErrorOn(
                '401',
                ErrorType::init(
                    "The request has not been applied because it lacks valid  authentication cr" .
                    "edentials for the target resource.\n",
                    ErrorObjectException::class
                )
            )
            ->throwErrorOn('403', ErrorType::init('Forbidden', ErrorObjectException::class))
            ->throwErrorOn(
                '404',
                ErrorType::init(
                    "The origin server did not find a current representation  for the target re" .
                    "source or is not willing to disclose  that one exists.\n",
                    ErrorObjectException::class
                )
            )
            ->throwErrorOn(
                '500',
                ErrorType::init(
                    "The server encountered an unexpected condition that  prevented it from ful" .
                    "filling the request.\n",
                    ErrorObjectException::class
                )
            )
            ->type(SummaryOfBundleResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * This API allows to set or update the restrictions for existing cards or newly ordered cards under
     * the same payer.
     *
     *
     *
     * #### Supported operations
     *
     * * Set or reset usage restrictions for cards
     *
     * * Set or reset day/time restrictions for cards
     *
     * * Set or reset product restrictions for cards
     *
     * * Set or reset location restrictions for cards
     *
     * @param string $requestId Mandatory UUID (according to RFC 4122 standards) for requests and
     *        responses. This will be played back in the response from the request.
     * @param RestrictionCardRequest|null $body Summary Bundle Request body
     *
     * @return RestrictionCardResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function cardRestriction(string $requestId, ?RestrictionCardRequest $body = null): RestrictionCardResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/card-restrictions/v2/card')
            ->auth('BearerToken')
            ->parameters(
                HeaderParam::init('RequestId', $requestId),
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '400',
                ErrorType::init(
                    "The server cannot or will not process the request due to something that is" .
                    " perceived to be a client error (e.g., malformed request syntax, invalid re" .
                    "quest message framing, or deceptive request routing).\n",
                    ErrorObjectException::class
                )
            )
            ->throwErrorOn(
                '401',
                ErrorType::init(
                    "The request has not been applied because it lacks valid  authentication cr" .
                    "edentials for the target resource.\n",
                    ErrorObjectException::class
                )
            )
            ->throwErrorOn('403', ErrorType::init('Forbidden', ErrorObjectException::class))
            ->throwErrorOn(
                '404',
                ErrorType::init(
                    "The origin server did not find a current representation  for the target re" .
                    "source or is not willing to disclose  that one exists.\n",
                    ErrorObjectException::class
                )
            )
            ->throwErrorOn(
                '500',
                ErrorType::init(
                    "The server encountered an unexpected condition that  prevented it from ful" .
                    "filling the request.\n",
                    ErrorObjectException::class
                )
            )
            ->type(RestrictionCardResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * This operation allows setting or updating the usage restrictions of an existing account.
     *
     *
     *
     * #### Validation rules
     *
     *
     *
     * *    The account exists.
     *
     * *    Day time restriction cannot be set to restrict the use of a card, under the account, on all days
     * of the week.
     *
     * *    Either of the usage, daytime or location is either marked for reset or new restriction values
     * provided for the account.
     *
     * *    In usage restrictions, the limits per transaction should be less than or equal to Daily, Daily
     * should be less than or equal to Weekly, Weekly should be less than or equal to Monthly. Exception
     * being 0/blank will be skipped, i.e., Daily value should be less than equal to Monthly value if
     * Weekly value is 0/blank.
     *
     *
     *
     * @param string $requestId Mandatory UUID (according to RFC 4122 standards) for requests and
     *        responses. This will be played back in the response from the request.
     * @param AccountRestrictionRequest|null $body Summary Bundle Request body
     *
     * @return AccountRestrictionResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function accountRestriction(
        string $requestId,
        ?AccountRestrictionRequest $body = null
    ): AccountRestrictionResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/card-restrictions/v1/Account')
            ->auth('BearerToken')
            ->parameters(
                HeaderParam::init('RequestId', $requestId),
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '400',
                ErrorType::init(
                    "The server cannot or will not process the request due to something that is" .
                    " perceived to be a client error (e.g., malformed request syntax, invalid re" .
                    "quest message framing, or deceptive request routing).\n",
                    ErrorObjectException::class
                )
            )
            ->throwErrorOn(
                '401',
                ErrorType::init(
                    "The request has not been applied because it lacks valid  authentication cr" .
                    "edentials for the target resource.\n",
                    ErrorObjectException::class
                )
            )
            ->throwErrorOn('403', ErrorType::init('Forbidden', ErrorObjectException::class))
            ->throwErrorOn(
                '404',
                ErrorType::init(
                    "The origin server did not find a current representation  for the target re" .
                    "source or is not willing to disclose  that one exists.\n",
                    ErrorObjectException::class
                )
            )
            ->throwErrorOn(
                '500',
                ErrorType::init(
                    "The server encountered an unexpected condition that  prevented it from ful" .
                    "filling the request.\n",
                    ErrorObjectException::class
                )
            )
            ->type(AccountRestrictionResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * This operation will allow user to get account level limits for the given account.
     *
     * It returns the velocity limits if its overridden at the account else the values will be null/empty.
     *
     * @param string $requestId Mandatory UUID (according to RFC 4122 standards) for requests and
     *        responses. This will be played back in the response from the request.
     * @param SearchAccountLimitRequest|null $body Summary Bundle Request body
     *
     * @return SearchAccountLimitResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function searchAccountLimit(
        string $requestId,
        ?SearchAccountLimitRequest $body = null
    ): SearchAccountLimitResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/card-restrictions/v1/searchaccountlimit')
            ->auth('BearerToken')
            ->parameters(
                HeaderParam::init('RequestId', $requestId),
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '400',
                ErrorType::init(
                    "The server cannot or will not process the request due to something that is" .
                    " perceived to be a client error (e.g., malformed request syntax, invalid re" .
                    "quest message framing, or deceptive request routing).\n",
                    ErrorObjectException::class
                )
            )
            ->throwErrorOn(
                '401',
                ErrorType::init(
                    "The request has not been applied because it lacks valid  authentication cr" .
                    "edentials for the target resource.\n",
                    ErrorObjectException::class
                )
            )
            ->throwErrorOn('403', ErrorType::init('Forbidden', ErrorObjectException::class))
            ->throwErrorOn(
                '404',
                ErrorType::init(
                    "The origin server did not find a current representation  for the target re" .
                    "source or is not willing to disclose  that one exists.\n",
                    ErrorObjectException::class
                )
            )
            ->throwErrorOn(
                '500',
                ErrorType::init(
                    "The server encountered an unexpected condition that  prevented it from ful" .
                    "filling the request.\n",
                    ErrorObjectException::class
                )
            )
            ->type(SearchAccountLimitResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * This API will allows querying card details including the day/time and product restrictions.
     *
     * #### Supported operations
     *
     * * Search by list of cards or bundle
     *
     * * Include card bundle details (optional)
     *
     *
     * @param string $requestId Mandatory UUID (according to RFC 4122 standards) for requests and
     *        responses. This will be played back in the response from the request.
     * @param RestrictionSearchCardRequest|null $body Summary Bundle Request body
     *
     * @return RestrictionSearchCardResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function searchCardRestriction(
        string $requestId,
        ?RestrictionSearchCardRequest $body = null
    ): RestrictionSearchCardResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/card-restrictions/v2/search')
            ->auth('BearerToken')
            ->parameters(
                HeaderParam::init('RequestId', $requestId),
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '400',
                ErrorType::init(
                    "The server cannot or will not process the request due to something that is" .
                    " perceived to be a client error (e.g., malformed request syntax, invalid re" .
                    "quest message framing, or deceptive request routing).\n",
                    ErrorObjectException::class
                )
            )
            ->throwErrorOn(
                '401',
                ErrorType::init(
                    "The request has not been applied because it lacks valid  authentication cr" .
                    "edentials for the target resource.\n",
                    ErrorObjectException::class
                )
            )
            ->throwErrorOn('403', ErrorType::init('Forbidden', ErrorObjectException::class))
            ->throwErrorOn(
                '404',
                ErrorType::init(
                    "The origin server did not find a current representation  for the target re" .
                    "source or is not willing to disclose  that one exists.\n",
                    ErrorObjectException::class
                )
            )
            ->throwErrorOn(
                '500',
                ErrorType::init(
                    "The server encountered an unexpected condition that  prevented it from ful" .
                    "filling the request.\n",
                    ErrorObjectException::class
                )
            )
            ->type(RestrictionSearchCardResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
