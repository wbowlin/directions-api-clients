//
// Polygon.swift
//
// Generated by swagger-codegen
// https://github.com/swagger-api/swagger-codegen
//

import Foundation


public struct Polygon: Codable {


    public var type: String?

    public var coordinates: [[[BigDecimal]]]?
    public init(type: String?, coordinates: [[[BigDecimal]]]?) { 
        self.type = type
        self.coordinates = coordinates
    }

}