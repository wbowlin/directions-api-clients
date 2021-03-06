# GraphHopper Directions API
# 
# You use the GraphHopper Directions API to add route planning, navigation and route optimization to your software. E.g. the Routing API has turn instructions and elevation data and the Route Optimization API solves your logistic problems and supports various constraints like time window and capacity restrictions. Also it is possible to get all distances between all locations with our fast Matrix API.
# 
# OpenAPI spec version: 1.0.0
# 
# Generated by: https://github.com/swagger-api/swagger-codegen.git


#' Location Class
#'
#' @field lon 
#' @field lat 
#'
#' @importFrom R6 R6Class
#' @importFrom jsonlite fromJSON toJSON
#' @export
Location <- R6::R6Class(
  'Location',
  public = list(
    `lon` = NULL,
    `lat` = NULL,
    initialize = function(`lon`, `lat`){
      if (!missing(`lon`)) {
        stopifnot(is.numeric(`lon`), length(`lon`) == 1)
        self$`lon` <- `lon`
      }
      if (!missing(`lat`)) {
        stopifnot(is.numeric(`lat`), length(`lat`) == 1)
        self$`lat` <- `lat`
      }
    },
    toJSON = function() {
      LocationObject <- list()
      if (!is.null(self$`lon`)) {
        LocationObject[['lon']] <- self$`lon`
      }
      if (!is.null(self$`lat`)) {
        LocationObject[['lat']] <- self$`lat`
      }

      LocationObject
    },
    fromJSON = function(LocationJson) {
      LocationObject <- jsonlite::fromJSON(LocationJson)
      if (!is.null(LocationObject$`lon`)) {
        self$`lon` <- LocationObject$`lon`
      }
      if (!is.null(LocationObject$`lat`)) {
        self$`lat` <- LocationObject$`lat`
      }
    },
    toJSONString = function() {
       sprintf(
        '{
           "lon": %d,
           "lat": %d
        }',
        self$`lon`,
        self$`lat`
      )
    },
    fromJSONString = function(LocationJson) {
      LocationObject <- jsonlite::fromJSON(LocationJson)
      self$`lon` <- LocationObject$`lon`
      self$`lat` <- LocationObject$`lat`
    }
  )
)
