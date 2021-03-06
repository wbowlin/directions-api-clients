# Swagger\Client\RoutingApi

All URIs are relative to *https://graphhopper.com/api/1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getRoute**](RoutingApi.md#getroute) | **GET** /route | Execute a routing request
[**routeInfoGet**](RoutingApi.md#routeinfoget) | **GET** /route/info | Coverage information

# **getRoute**
> \Swagger\Client\Model\RouteResponse getRoute($point, $point_hint, $snap_prevention, $vehicle, $locale, $elevation, $details, $optimize, $instructions, $calc_points, $debug, $points_encoded, $type, $ch_disable, $weighting, $heading, $heading_penalty, $pass_through, $block_area, $avoid, $algorithm, $round_trip_distance, $round_trip_seed, $alternative_route_max_paths, $alternative_route_max_weight_factor, $alternative_route_max_share_factor)

Execute a routing request

### Introduction  ![Routing screenshot](./img/routing-example.png)  The Routing is part of the GraphHopper Directions API. Routing is the process of finding the best path connecting two or more points, where the meaning of ''best'' depends on the vehicle and use case.  ### Navigation If you plan to use the Routing for navigation, have a look at our [open source demo navigation application](https://github.com/graphhopper/graphhopper-navigation-example) and adapt it to your needs.  ### Fast To get started using this API, just provide two or more points and retrieve the fastest route through the road network that connects them. This type of request is heavily optimized for query performance, so it does not take turn restrictions into account, and it does not allow for some advanced features. ### Flexible Enable turn restrictions and unlock further flexible features via `ch.disable=true`. Please note that some options make the request more expensive, see the [FAQ](https://graphhopper.com/api/1/docs/FAQ/) for more details.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('key', 'Bearer');

$apiInstance = new Swagger\Client\directions-api-client\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$point = array("point_example"); // string[] | The points for which the route should be calculated. Format: `[latitude,longitude]`. Specify at least an origin and a destination. Via points are possible. The maximum number depends on your plan.
$point_hint = array("point_hint_example"); // string[] | The `point_hint` is typically a road name to which the associated `point` parameter should be snapped to. Specify no `point_hint` parameter or the same number as you have `point` parameters.
$snap_prevention = array("snap_prevention_example"); // string[] | Optional parameter to avoid snapping to a certain road class or road environment. Currently supported values are `motorway`, `trunk`, `ferry`, `tunnel`, `bridge` and `ford`. Multiple values are specified like `snap_prevention=ferry&snap_prevention=motorway`.
$vehicle = new \Swagger\Client\Model\VehicleProfileId(); // \Swagger\Client\Model\VehicleProfileId | The vehicle profile for which the route should be calculated.
$locale = "locale_example"; // string | The locale of the resulting turn instructions. E.g. `pt_PT` for Portuguese or `de` for German.
$elevation = true; // bool | If `true`, a third coordinate, the altitude, is included with all positions in the response. This changes the format of the `points` and `snapped_waypoints` fields of the response, in both their encodings. Unless you switch off the `points_encoded` parameter, you need special code on the client side that can handle three-dimensional coordinates. A request can fail if the vehicle profile does not support elevation. See the features object for every vehicle profile.
$details = array("details_example"); // string[] | Optional parameter to retrieve path details. You can request additional details for the route: `street_name` and `time`. For all motor vehicle profiles, we additionally support `max_speed`, `toll`, `road_class`, `road_environment`, and `surface`.
$optimize = true; // bool | Normally, the calculated route will visit the points in the order you specified them. If you have more than two points, you can set this parameter to `true` and the points may be re-ordered to minimize the total travel time. Keep in mind that the limits on the number of locations of the Route Optimization applies, and the request is more expensive.
$instructions = true; // bool | If instructions should be calculated and returned
$calc_points = true; // bool | If the points for the route should be calculated at all.
$debug = true; // bool | If `true`, the output will be formatted.
$points_encoded = true; // bool | Allows changing the encoding of location data in the response. The default is polyline encoding, which is compact but requires special client code to unpack. (We provide it in our JavaScript client library!) Set this parameter to `false` to switch the encoding to simple coordinate pairs like `[lon,lat]`, or `[lon,lat,elevation]`. See the description of the response format for more information.
$type = "type_example"; // string | Specifies the media type for the response. For `json`, it will be `application/json`. For `gpx`, it will be `application/gpx+xml`.
$ch_disable = true; // bool | Use this parameter in combination with one or more parameters from below.
$weighting = "weighting_example"; // string | Determines the way the ''best'' route is calculated. Default is `fastest`. Other options are `shortest` (e.g. for `vehicle=foot` or `bike`) and `short_fastest` which finds a reasonable balance between `shortest` and `fastest`. Requires `ch.disable=true`.
$heading = array(56); // int[] | Favour a heading direction for a certain point. Specify either one heading for the start point or as many as there are points. In this case headings are associated by their order to the specific points. Headings are given as north based clockwise angle between 0 and 360 degree. This parameter also influences the tour generated with `algorithm=round_trip` and forces the initial direction.  Requires `ch.disable=true`.
$heading_penalty = 56; // int | Time penalty in seconds for not obeying a specified heading. Requires `ch.disable=true`.
$pass_through = true; // bool | If `true`, u-turns are avoided at via-points with regard to the `heading_penalty`. Requires `ch.disable=true`.
$block_area = "block_area_example"; // string | Block road access via a point with the format `latitude,longitude` or an area defined by a circle `lat,lon,radius` or a rectangle `lat1,lon1,lat2,lon2`. Separate several values with `;`. Requires `ch.disable=true`.
$avoid = "avoid_example"; // string | Specify which road classes and environments you would like to avoid.  Possible values are `motorway`, `primary`, `secondary`, `tertiary`, `trunk`, `residential`, `steps`, `living_street`, `track`, `toll`, `ferry`, `tunnel`, `bridge` and `ford`. Separate several values with `;`. Obviously not all the values make sense for all vehicle profiles e.g. `bike` is already forbidden on a `motorway`. Requires `ch.disable=true`.
$algorithm = "algorithm_example"; // string | Rather than looking for the shortest or fastest path, this lets you solve two different problems related to routing: With `round_trip`, the route will get you back to where you started. This is meant for fun (think of a bike trip), so we will add some randomness. With `alternative_route`, we give you not one but several routes that are close to optimal, but not too similar to each other. You can control both of these features with additional parameters, see below. Requires `ch.disable=true`.
$round_trip_distance = 56; // int | If `algorithm=round_trip`, this parameter configures approximative length of the resulting round trip. Requires `ch.disable=true`.
$round_trip_seed = 789; // int | If `algorithm=round_trip`, this sets the random seed. Change this to get a different tour for each value.
$alternative_route_max_paths = 56; // int | If `algorithm=alternative_route`, this parameter sets the number of maximum paths which should be calculated. Increasing can lead to worse alternatives.
$alternative_route_max_weight_factor = 1.2; // float | If `algorithm=alternative_route`, this parameter sets the factor by which the alternatives routes can be longer than the optimal route. Increasing can lead to worse alternatives.
$alternative_route_max_share_factor = 1.2; // float | If `algorithm=alternative_route`, this parameter specifies how similar an alternative route can be to the optimal route. Increasing can lead to worse alternatives.

try {
    $result = $apiInstance->getRoute($point, $point_hint, $snap_prevention, $vehicle, $locale, $elevation, $details, $optimize, $instructions, $calc_points, $debug, $points_encoded, $type, $ch_disable, $weighting, $heading, $heading_penalty, $pass_through, $block_area, $avoid, $algorithm, $round_trip_distance, $round_trip_seed, $alternative_route_max_paths, $alternative_route_max_weight_factor, $alternative_route_max_share_factor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->getRoute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **point** | [**string[]**](../Model/string.md)| The points for which the route should be calculated. Format: &#x60;[latitude,longitude]&#x60;. Specify at least an origin and a destination. Via points are possible. The maximum number depends on your plan. |
 **point_hint** | [**string[]**](../Model/string.md)| The &#x60;point_hint&#x60; is typically a road name to which the associated &#x60;point&#x60; parameter should be snapped to. Specify no &#x60;point_hint&#x60; parameter or the same number as you have &#x60;point&#x60; parameters. | [optional]
 **snap_prevention** | [**string[]**](../Model/string.md)| Optional parameter to avoid snapping to a certain road class or road environment. Currently supported values are &#x60;motorway&#x60;, &#x60;trunk&#x60;, &#x60;ferry&#x60;, &#x60;tunnel&#x60;, &#x60;bridge&#x60; and &#x60;ford&#x60;. Multiple values are specified like &#x60;snap_prevention&#x3D;ferry&amp;snap_prevention&#x3D;motorway&#x60;. | [optional]
 **vehicle** | [**\Swagger\Client\Model\VehicleProfileId**](../Model/.md)| The vehicle profile for which the route should be calculated. | [optional]
 **locale** | **string**| The locale of the resulting turn instructions. E.g. &#x60;pt_PT&#x60; for Portuguese or &#x60;de&#x60; for German. | [optional]
 **elevation** | **bool**| If &#x60;true&#x60;, a third coordinate, the altitude, is included with all positions in the response. This changes the format of the &#x60;points&#x60; and &#x60;snapped_waypoints&#x60; fields of the response, in both their encodings. Unless you switch off the &#x60;points_encoded&#x60; parameter, you need special code on the client side that can handle three-dimensional coordinates. A request can fail if the vehicle profile does not support elevation. See the features object for every vehicle profile. | [optional]
 **details** | [**string[]**](../Model/string.md)| Optional parameter to retrieve path details. You can request additional details for the route: &#x60;street_name&#x60; and &#x60;time&#x60;. For all motor vehicle profiles, we additionally support &#x60;max_speed&#x60;, &#x60;toll&#x60;, &#x60;road_class&#x60;, &#x60;road_environment&#x60;, and &#x60;surface&#x60;. | [optional]
 **optimize** | **bool**| Normally, the calculated route will visit the points in the order you specified them. If you have more than two points, you can set this parameter to &#x60;true&#x60; and the points may be re-ordered to minimize the total travel time. Keep in mind that the limits on the number of locations of the Route Optimization applies, and the request is more expensive. | [optional]
 **instructions** | **bool**| If instructions should be calculated and returned | [optional]
 **calc_points** | **bool**| If the points for the route should be calculated at all. | [optional]
 **debug** | **bool**| If &#x60;true&#x60;, the output will be formatted. | [optional]
 **points_encoded** | **bool**| Allows changing the encoding of location data in the response. The default is polyline encoding, which is compact but requires special client code to unpack. (We provide it in our JavaScript client library!) Set this parameter to &#x60;false&#x60; to switch the encoding to simple coordinate pairs like &#x60;[lon,lat]&#x60;, or &#x60;[lon,lat,elevation]&#x60;. See the description of the response format for more information. | [optional]
 **type** | **string**| Specifies the media type for the response. For &#x60;json&#x60;, it will be &#x60;application/json&#x60;. For &#x60;gpx&#x60;, it will be &#x60;application/gpx+xml&#x60;. | [optional]
 **ch_disable** | **bool**| Use this parameter in combination with one or more parameters from below. | [optional]
 **weighting** | **string**| Determines the way the &#x27;&#x27;best&#x27;&#x27; route is calculated. Default is &#x60;fastest&#x60;. Other options are &#x60;shortest&#x60; (e.g. for &#x60;vehicle&#x3D;foot&#x60; or &#x60;bike&#x60;) and &#x60;short_fastest&#x60; which finds a reasonable balance between &#x60;shortest&#x60; and &#x60;fastest&#x60;. Requires &#x60;ch.disable&#x3D;true&#x60;. | [optional]
 **heading** | [**int[]**](../Model/int.md)| Favour a heading direction for a certain point. Specify either one heading for the start point or as many as there are points. In this case headings are associated by their order to the specific points. Headings are given as north based clockwise angle between 0 and 360 degree. This parameter also influences the tour generated with &#x60;algorithm&#x3D;round_trip&#x60; and forces the initial direction.  Requires &#x60;ch.disable&#x3D;true&#x60;. | [optional]
 **heading_penalty** | **int**| Time penalty in seconds for not obeying a specified heading. Requires &#x60;ch.disable&#x3D;true&#x60;. | [optional]
 **pass_through** | **bool**| If &#x60;true&#x60;, u-turns are avoided at via-points with regard to the &#x60;heading_penalty&#x60;. Requires &#x60;ch.disable&#x3D;true&#x60;. | [optional]
 **block_area** | **string**| Block road access via a point with the format &#x60;latitude,longitude&#x60; or an area defined by a circle &#x60;lat,lon,radius&#x60; or a rectangle &#x60;lat1,lon1,lat2,lon2&#x60;. Separate several values with &#x60;;&#x60;. Requires &#x60;ch.disable&#x3D;true&#x60;. | [optional]
 **avoid** | **string**| Specify which road classes and environments you would like to avoid.  Possible values are &#x60;motorway&#x60;, &#x60;primary&#x60;, &#x60;secondary&#x60;, &#x60;tertiary&#x60;, &#x60;trunk&#x60;, &#x60;residential&#x60;, &#x60;steps&#x60;, &#x60;living_street&#x60;, &#x60;track&#x60;, &#x60;toll&#x60;, &#x60;ferry&#x60;, &#x60;tunnel&#x60;, &#x60;bridge&#x60; and &#x60;ford&#x60;. Separate several values with &#x60;;&#x60;. Obviously not all the values make sense for all vehicle profiles e.g. &#x60;bike&#x60; is already forbidden on a &#x60;motorway&#x60;. Requires &#x60;ch.disable&#x3D;true&#x60;. | [optional]
 **algorithm** | **string**| Rather than looking for the shortest or fastest path, this lets you solve two different problems related to routing: With &#x60;round_trip&#x60;, the route will get you back to where you started. This is meant for fun (think of a bike trip), so we will add some randomness. With &#x60;alternative_route&#x60;, we give you not one but several routes that are close to optimal, but not too similar to each other. You can control both of these features with additional parameters, see below. Requires &#x60;ch.disable&#x3D;true&#x60;. | [optional]
 **round_trip_distance** | **int**| If &#x60;algorithm&#x3D;round_trip&#x60;, this parameter configures approximative length of the resulting round trip. Requires &#x60;ch.disable&#x3D;true&#x60;. | [optional]
 **round_trip_seed** | **int**| If &#x60;algorithm&#x3D;round_trip&#x60;, this sets the random seed. Change this to get a different tour for each value. | [optional]
 **alternative_route_max_paths** | **int**| If &#x60;algorithm&#x3D;alternative_route&#x60;, this parameter sets the number of maximum paths which should be calculated. Increasing can lead to worse alternatives. | [optional]
 **alternative_route_max_weight_factor** | **float**| If &#x60;algorithm&#x3D;alternative_route&#x60;, this parameter sets the factor by which the alternatives routes can be longer than the optimal route. Increasing can lead to worse alternatives. | [optional]
 **alternative_route_max_share_factor** | **float**| If &#x60;algorithm&#x3D;alternative_route&#x60;, this parameter specifies how similar an alternative route can be to the optimal route. Increasing can lead to worse alternatives. | [optional]

### Return type

[**\Swagger\Client\Model\RouteResponse**](../Model/RouteResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **routeInfoGet**
> \Swagger\Client\Model\InfoResponse routeInfoGet()

Coverage information

Use this to find out details about the supported vehicle profiles and features, or if you just need to ping the server.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('key', 'Bearer');

$apiInstance = new Swagger\Client\directions-api-client\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->routeInfoGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->routeInfoGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\InfoResponse**](../Model/InfoResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

