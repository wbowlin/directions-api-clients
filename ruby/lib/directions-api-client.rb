=begin
#GraphHopper Directions API

#You use the GraphHopper Directions API to add route planning, navigation and route optimization to your software. E.g. the Routing API has turn instructions and elevation data and the Route Optimization API solves your logistic problems and supports various constraints like time window and capacity restrictions. Also it is possible to get all distances between all locations with our fast Matrix API.

OpenAPI spec version: 1.0.0

Generated by: https://github.com/swagger-api/swagger-codegen.git
Swagger Codegen version: 2.4.0-SNAPSHOT

=end

# Common files
require 'directions-api-client/api_client'
require 'directions-api-client/api_error'
require 'directions-api-client/version'
require 'directions-api-client/configuration'

# Models
require 'directions-api-client/models/activity'
require 'directions-api-client/models/address'
require 'directions-api-client/models/algorithm'
require 'directions-api-client/models/configuration'
require 'directions-api-client/models/cost_matrix'
require 'directions-api-client/models/cost_matrix_data'
require 'directions-api-client/models/cost_matrix_data_info'
require 'directions-api-client/models/gh_error'
require 'directions-api-client/models/gh_error_hints'
require 'directions-api-client/models/geocoding_location'
require 'directions-api-client/models/geocoding_point'
require 'directions-api-client/models/geocoding_response'
require 'directions-api-client/models/isochrone_response'
require 'directions-api-client/models/isochrone_response_polygon'
require 'directions-api-client/models/isochrone_response_polygon_geometry'
require 'directions-api-client/models/isochrone_response_polygon_properties'
require 'directions-api-client/models/job_id'
require 'directions-api-client/models/location'
require 'directions-api-client/models/matrix_request'
require 'directions-api-client/models/matrix_response'
require 'directions-api-client/models/model_break'
require 'directions-api-client/models/objective'
require 'directions-api-client/models/relation'
require 'directions-api-client/models/request'
require 'directions-api-client/models/response'
require 'directions-api-client/models/response_coordinates'
require 'directions-api-client/models/response_coordinates_array'
require 'directions-api-client/models/response_info'
require 'directions-api-client/models/response_instruction'
require 'directions-api-client/models/response_instructions'
require 'directions-api-client/models/route'
require 'directions-api-client/models/route_point'
require 'directions-api-client/models/route_response'
require 'directions-api-client/models/route_response_path'
require 'directions-api-client/models/routing'
require 'directions-api-client/models/service'
require 'directions-api-client/models/shipment'
require 'directions-api-client/models/solution'
require 'directions-api-client/models/solution_unassigned'
require 'directions-api-client/models/stop'
require 'directions-api-client/models/time_window'
require 'directions-api-client/models/vehicle'
require 'directions-api-client/models/vehicle_type'

# APIs
require 'directions-api-client/api/geocoding_api'
require 'directions-api-client/api/isochrone_api'
require 'directions-api-client/api/matrix_api'
require 'directions-api-client/api/routing_api'
require 'directions-api-client/api/solution_api'
require 'directions-api-client/api/vrp_api'

module DirectionsApiClient
  class << self
    # Customize default settings for the SDK using block.
    #   DirectionsApiClient.configure do |config|
    #     config.username = "xxx"
    #     config.password = "xxx"
    #   end
    # If no block given, return the default Configuration object.
    def configure
      if block_given?
        yield(Configuration.default)
      else
        Configuration.default
      end
    end
  end
end