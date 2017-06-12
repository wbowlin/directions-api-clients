# coding: utf-8

"""
    GraphHopper Directions API

    You use the GraphHopper Directions API to add route planning, navigation and route optimization to your software. E.g. the Routing API has turn instructions and elevation data and the Route Optimization API solves your logistic problems and supports various constraints like time window and capacity restrictions. Also it is possible to get all distances between all locations with our fast Matrix API.

    OpenAPI spec version: 1.0.0
    
    Generated by: https://github.com/swagger-api/swagger-codegen.git
"""


from pprint import pformat
from six import iteritems
import re


class Response(object):
    """
    NOTE: This class is auto generated by the swagger code generator program.
    Do not edit the class manually.
    """
    def __init__(self, copyrights=None, job_id=None, status=None, waiting_in_queue=None, processing_time=None, solution=None):
        """
        Response - a model defined in Swagger

        :param dict swaggerTypes: The key is attribute name
                                  and the value is attribute type.
        :param dict attributeMap: The key is attribute name
                                  and the value is json key in definition.
        """
        self.swagger_types = {
            'copyrights': 'list[str]',
            'job_id': 'str',
            'status': 'str',
            'waiting_in_queue': 'int',
            'processing_time': 'int',
            'solution': 'Solution'
        }

        self.attribute_map = {
            'copyrights': 'copyrights',
            'job_id': 'job_id',
            'status': 'status',
            'waiting_in_queue': 'waiting_in_queue',
            'processing_time': 'processing_time',
            'solution': 'solution'
        }

        self._copyrights = copyrights
        self._job_id = job_id
        self._status = status
        self._waiting_in_queue = waiting_in_queue
        self._processing_time = processing_time
        self._solution = solution

    @property
    def copyrights(self):
        """
        Gets the copyrights of this Response.

        :return: The copyrights of this Response.
        :rtype: list[str]
        """
        return self._copyrights

    @copyrights.setter
    def copyrights(self, copyrights):
        """
        Sets the copyrights of this Response.

        :param copyrights: The copyrights of this Response.
        :type: list[str]
        """

        self._copyrights = copyrights

    @property
    def job_id(self):
        """
        Gets the job_id of this Response.
        unique identify of job - which you get when posting your request to the large problem solver

        :return: The job_id of this Response.
        :rtype: str
        """
        return self._job_id

    @job_id.setter
    def job_id(self, job_id):
        """
        Sets the job_id of this Response.
        unique identify of job - which you get when posting your request to the large problem solver

        :param job_id: The job_id of this Response.
        :type: str
        """

        self._job_id = job_id

    @property
    def status(self):
        """
        Gets the status of this Response.
        indicates the current status of the job

        :return: The status of this Response.
        :rtype: str
        """
        return self._status

    @status.setter
    def status(self, status):
        """
        Sets the status of this Response.
        indicates the current status of the job

        :param status: The status of this Response.
        :type: str
        """
        allowed_values = ["waiting_in_queue", "processing", "finished"]
        if status not in allowed_values:
            raise ValueError(
                "Invalid value for `status` ({0}), must be one of {1}"
                .format(status, allowed_values)
            )

        self._status = status

    @property
    def waiting_in_queue(self):
        """
        Gets the waiting_in_queue of this Response.
        waiting time in ms

        :return: The waiting_in_queue of this Response.
        :rtype: int
        """
        return self._waiting_in_queue

    @waiting_in_queue.setter
    def waiting_in_queue(self, waiting_in_queue):
        """
        Sets the waiting_in_queue of this Response.
        waiting time in ms

        :param waiting_in_queue: The waiting_in_queue of this Response.
        :type: int
        """

        self._waiting_in_queue = waiting_in_queue

    @property
    def processing_time(self):
        """
        Gets the processing_time of this Response.
        processing time in ms. if job is still waiting in queue, processing_time is 0

        :return: The processing_time of this Response.
        :rtype: int
        """
        return self._processing_time

    @processing_time.setter
    def processing_time(self, processing_time):
        """
        Sets the processing_time of this Response.
        processing time in ms. if job is still waiting in queue, processing_time is 0

        :param processing_time: The processing_time of this Response.
        :type: int
        """

        self._processing_time = processing_time

    @property
    def solution(self):
        """
        Gets the solution of this Response.
        the solution. only available if status field indicates finished

        :return: The solution of this Response.
        :rtype: Solution
        """
        return self._solution

    @solution.setter
    def solution(self, solution):
        """
        Sets the solution of this Response.
        the solution. only available if status field indicates finished

        :param solution: The solution of this Response.
        :type: Solution
        """

        self._solution = solution

    def to_dict(self):
        """
        Returns the model properties as a dict
        """
        result = {}

        for attr, _ in iteritems(self.swagger_types):
            value = getattr(self, attr)
            if isinstance(value, list):
                result[attr] = list(map(
                    lambda x: x.to_dict() if hasattr(x, "to_dict") else x,
                    value
                ))
            elif hasattr(value, "to_dict"):
                result[attr] = value.to_dict()
            elif isinstance(value, dict):
                result[attr] = dict(map(
                    lambda item: (item[0], item[1].to_dict())
                    if hasattr(item[1], "to_dict") else item,
                    value.items()
                ))
            else:
                result[attr] = value

        return result

    def to_str(self):
        """
        Returns the string representation of the model
        """
        return pformat(self.to_dict())

    def __repr__(self):
        """
        For `print` and `pprint`
        """
        return self.to_str()

    def __eq__(self, other):
        """
        Returns true if both objects are equal
        """
        if not isinstance(other, Response):
            return False

        return self.__dict__ == other.__dict__

    def __ne__(self, other):
        """
        Returns true if both objects are not equal
        """
        return not self == other