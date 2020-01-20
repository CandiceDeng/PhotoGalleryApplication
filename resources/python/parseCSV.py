#!/usr/bin/python
import csv
import json
import re


def getData(csvFilePath):
	data = []

	with open (csvFilePath) as csvFile:
		csvReader = csv.reader(csvFile,quoting=csv.QUOTE_NONE)
		for row in csvReader:
			line = "".join(row)
			data.append(line);

	return data

if __name__ == '__main__':
    print getData("/Users/CandiceDeng 1/PhotoGalleryApplication/resources/python/BmA8B0tY.csv")
