{
  "subject": "EdmundsDemo",
  "columns": [
    {
      "key": "price",
      "full_name": "Price",
      "type": "numeric",
      "is_objective": false,
      "goal": "min",
      "format": "number:0 | taPrefix:'$'",
      "description": "Manufacturer's Suggested Retail Price (MSRP)"
    },
    {
      "key": "engineSize",
      "full_name": "Engine Volume",
      "type": "numeric",
      "is_objective": false,
      "goal": "max",
      "format": "number:1 | taSuffix:' L'",
      "range": {
        "low": 0,
        "high": 10
      },
      "description": "The engine size in liters"
    },
    {
      "key": "averageRating",
      "full_name": "Average Rating",
      "type": "numeric",
      "is_objective": false,
      "goal": "max",
      "format": "number:1 | taSuffix:' stars'",
      "range": {
        "low": 0,
        "high": 5
      },
      "description": "Average user-generated vehicle ratings and reviews that were submitted on Edmunds.com"
    },
    {
      "key": "reviewsCount",
      "full_name": "Number of Reviews",
      "type": "numeric",
      "is_objective": false,
      "goal": "max",
      "format": "number:0",
      "description": "Number of user-generated vehicle ratings and reviews that were submitted on Edmunds.com"
    },
    {
      "key": "power",
      "full_name": "Power",
      "type": "numeric",
      "is_objective": false,
      "goal": "max",
      "format": "number:0 | taSuffix:' hp'",
      "range": {
        "low": 0,
        "high": 710
      },
      "description": "The engine horsepower"
    },
    {
      "key": "MPGCombined",
      "full_name": "MPG Combined",
      "type": "numeric",
      "is_objective": false,
      "goal": "max",
      "format": "number:1 | taSuffix:' MPG'",
      "range": {
        "low": 0,
        "high": 55
      },
      "description": "Miles Per Gallon. Computed as 55% in the city and 45% on a highway."
    }
  ],
  "options": [
    {
      "key": 200727569,
      "name": "Acura ILX",
      "description": "Technology Plus Package 4dr Sedan (2.4L 4cyl 8AM)",
      "values": {
        "price": 32900,
        "engineSize": 2.4,
        "power": 201,
        "MPGCombined": 30,
        "averageRating": 4.05,
        "reviewsCount": 15
      }
    },
    {
      "key": 200726801,
      "name": "Acura MDX",
      "description": "4dr SUV (3.5L 6cyl 9A)",
      "values": {
        "price": 43015,
        "engineSize": 3.5,
        "power": 290,
        "MPGCombined": 23,
        "averageRating": 3.791,
        "reviewsCount": 37
      }
    },
    {
      "key": 200732587,
      "name": "Acura RDX",
      "description": "AcuraWatch Plus Package 4dr SUV AWD (3.5L 6cyl 6A)",
      "values": {
        "price": 38170,
        "engineSize": 3.5,
        "power": 279,
        "MPGCombined": 23,
        "averageRating": 4.31,
        "reviewsCount": 29
      }
    },
    {
      "key": 200729234,
      "name": "Acura RLX",
      "description": "Advance Package 4dr Sedan (3.5L 6cyl 6A)",
      "values": {
        "price": 60450,
        "engineSize": 3.5,
        "power": 310,
        "MPGCombined": 25,
        "averageRating": 5,
        "reviewsCount": 1
      }
    },
    {
      "key": 401583116,
      "name": "Acura TLX",
      "description": "Technology Package 4dr Sedan (2.4L 4cyl 8AM)",
      "values": {
        "price": 35750,
        "engineSize": 2.4,
        "power": 206,
        "MPGCombined": 29,
        "averageRating": 4.429,
        "reviewsCount": 14
      }
    },
    {
      "key": 401630280,
      "name": "Alfa Romeo 4C",
      "description": "Spider 2dr Convertible (1.7L 4cyl Turbo 6AM)",
      "values": {
        "price": 65900,
        "engineSize": 1.7,
        "power": 237,
        "MPGCombined": 29,
        "averageRating": null,
        "reviewsCount": null
      }
    },
    {
      "key": 401632434,
      "name": "Aston Martin DB9 GT",
      "description": "Bond Edition 2dr Coupe (5.9L 12cyl 6A)",
      "values": {
        "price": 235307,
        "engineSize": 5.9,
        "power": 540,
        "MPGCombined": 16,
        "averageRating": null,
        "reviewsCount": null
      }
    },
{
      "key": 200705425,
      "name": "smart fortwo",
      "description": "pure coupe 2dr Hatchback (1.0L 3cyl Turbo 5M)",
      "values": {
        "price": 14650,
        "engineSize": 1,
        "power": 89,
        "MPGCombined": 35,
        "averageRating": null,
        "reviewsCount": null
      }
    }
  ]
}

