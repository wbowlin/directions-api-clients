#import <Foundation/Foundation.h>
#import "SWGObject.h"

/**
* GraphHopper Directions API
* You use the GraphHopper Directions API to add route planning, navigation and route optimization to your software. E.g. the Routing API has turn instructions and elevation data and the Route Optimization API solves your logistic problems and supports various constraints like time window and capacity restrictions. Also it is possible to get all distances between all locations with our fast Matrix API.
*
* OpenAPI spec version: 1.0.0
* 
*
* NOTE: This class is auto generated by the swagger code generator program.
* https://github.com/swagger-api/swagger-codegen.git
* Do not edit the class manually.
*/





@protocol SWGAddress
@end

@interface SWGAddress : SWGObject

/* Unique identifier of location [optional]
 */
@property(nonatomic) NSString* locationId;
/* name of location, e.g. street name plus house number [optional]
 */
@property(nonatomic) NSString* name;
/* longitude [optional]
 */
@property(nonatomic) NSNumber* lon;
/* latitude [optional]
 */
@property(nonatomic) NSNumber* lat;
/* Optional parameter. Specifies a hint for each address to better snap the coordinates (lon,lat) to road network. E.g. if there is an address or house with two or more neighboring streets you can control for which street the closest location is looked up. [optional]
 */
@property(nonatomic) NSString* streetHint;

@end