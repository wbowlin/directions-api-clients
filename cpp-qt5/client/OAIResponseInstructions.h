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

/*
 * OAIResponseInstructions.h
 *
 * Contains information about the instructions for this route. The last instruction is always the Finish instruction and takes 0ms and 0meter. Keep in mind that instructions are currently under active development and can sometimes contain misleading information, so, make sure you always show an image of the map at the same time when navigating your users!
 */

#ifndef OAIResponseInstructions_H_
#define OAIResponseInstructions_H_

#include <QJsonObject>


#include "OAIOAIResponseInstruction.h"
#include <QList>

#include "OAIObject.h"

namespace OpenAPI {

class OAIResponseInstructions: public OAIObject {
public:
    OAIResponseInstructions();
    OAIResponseInstructions(QString json);
    ~OAIResponseInstructions();
    void init();
    void cleanup();

    QString asJson () override;
    QJsonObject asJsonObject() override;
    void fromJsonObject(QJsonObject json) override;
    OAIResponseInstructions* fromJson(QString jsonString) override;


    virtual bool isSet() override;

private:
};

}

#endif /* OAIResponseInstructions_H_ */