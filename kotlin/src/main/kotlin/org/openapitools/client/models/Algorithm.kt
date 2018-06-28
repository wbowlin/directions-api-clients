/**
* GraphHopper Directions API
* You use the GraphHopper Directions API to add route planning, navigation and route optimization to your software. E.g. the Routing API has turn instructions and elevation data and the Route Optimization API solves your logistic problems and supports various constraints like time window and capacity restrictions. Also it is possible to get all distances between all locations with our fast Matrix API.
*
* OpenAPI spec version: 1.0.0
* 
*
* NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
* https://openapi-generator.tech
* Do not edit the class manually.
*/
package org.openapitools.client.models


import com.squareup.moshi.Json
/**
 * 
 * @param problem_type 
 * @param objective 
 */
data class Algorithm (
    val problem_type: Algorithm.ProblemType? = null,
    val objective: Algorithm.Objective? = null
) {

    /**
    * 
    * Values: min,minMinusmax
    */
    enum class ProblemType(val value: kotlin.String){
    
        @Json(name = "min") min("min"),
    
        @Json(name = "min-max") minMinusmax("min-max");
    
    }

    /**
    * 
    * Values: transportTime,completionTime
    */
    enum class Objective(val value: kotlin.String){
    
        @Json(name = "transport_time") transportTime("transport_time"),
    
        @Json(name = "completion_time") completionTime("completion_time");
    
    }

}
