SF9_Ireland
===========

Description

This is a module that adds Irish counties to 'directory_country_region' table in the database so they are pulled out on the frontend when a customer chooses Ireland.

It also provides a shipping method for An Post, Ireland's postal network. This shipping method is based off the Auctionmaid Matrixrates module with a few of customisations:

1. As An Post have a single rate for all-Ireland deliveries, charges are setup not only for orders whose shipping countries is Ireland (IE), but also for the United Kingdom where the postcode starts with "BT", which indicates an address in Northern Ireland.

2. An Post provide 4 different package types that overlap in terms of weight. These are Envelope, Large Envelope, Package and Parcel. An assumption is made in the module that once the weight justifies using the larger package size, then it is used.

3. An Post provide a number of different types of delivery - Standard, Express, Courier and International Courier.

An example csv file is located in the module in the 'csv' directory in case the user wants to update the rates in future.