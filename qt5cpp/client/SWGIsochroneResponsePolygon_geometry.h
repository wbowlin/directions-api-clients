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

/*
 * SWGIsochroneResponsePolygon_geometry.h
 * 
 * 
 */

#ifndef SWGIsochroneResponsePolygon_geometry_H_
#define SWGIsochroneResponsePolygon_geometry_H_

#include <QJsonObject>


#include "SWGResponseCoordinatesArray.h"
#include <QList>
#include <QString>

#include "SWGObject.h"

namespace Swagger {

class SWGIsochroneResponsePolygon_geometry: public SWGObject {
public:
    SWGIsochroneResponsePolygon_geometry();
    SWGIsochroneResponsePolygon_geometry(QString* json);
    virtual ~SWGIsochroneResponsePolygon_geometry();
    void init();
    void cleanup();

    QString asJson ();
    QJsonObject* asJsonObject();
    void fromJsonObject(QJsonObject &json);
    SWGIsochroneResponsePolygon_geometry* fromJson(QString &jsonString);

    QString* getType();
    void setType(QString* type);

    QList<SWGResponseCoordinatesArray*>* getCoordinates();
    void setCoordinates(QList<SWGResponseCoordinatesArray*>* coordinates);


    virtual bool isSet() override;

private:
    QString* type;
    bool m_type_isSet;
    
    QList<SWGResponseCoordinatesArray*>* coordinates;
    bool m_coordinates_isSet;
    
};

}

#endif /* SWGIsochroneResponsePolygon_geometry_H_ */