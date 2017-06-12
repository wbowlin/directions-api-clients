/* 
 * GraphHopper Directions API
 *
 * You use the GraphHopper Directions API to add route planning, navigation and route optimization to your software. E.g. the Routing API has turn instructions and elevation data and the Route Optimization API solves your logistic problems and supports various constraints like time window and capacity restrictions. Also it is possible to get all distances between all locations with our fast Matrix API.
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 */

package graphhopper

type Vehicle struct {

	// Unique identifier of vehicle
	VehicleId string `json:"vehicle_id,omitempty"`

	// Unique identifier referring to the available vehicle types
	TypeId string `json:"type_id,omitempty"`

	StartAddress Address `json:"start_address,omitempty"`

	EndAddress Address `json:"end_address,omitempty"`

	Break_ ModelBreak `json:"break,omitempty"`

	// Indicates whether vehicle should return to start address or not. If not, it can end at any service activity.
	ReturnToDepot bool `json:"return_to_depot,omitempty"`

	// earliest start of vehicle at its start location
	EarliestStart int64 `json:"earliest_start,omitempty"`

	// latest end of vehicle at its end location
	LatestEnd int64 `json:"latest_end,omitempty"`

	// array of skills
	Skills []string `json:"skills,omitempty"`

	// max distance of vehicle
	MaxDistance int64 `json:"max_distance,omitempty"`
}