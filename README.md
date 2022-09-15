# How to use the API

`php artisan migrate:fresh --seed` to migrate all tables and data that project required

`php artisan schedule:work` for start to store the weather every 2 minutes

After that, use endpoints:
`http://localhost/api/weather` to get all weather data from database

`http://localhost/api/weather/yerevan` to see all weather data by city filter

`http://localhost/api/cities` to get all cities from database

`http://localhost/api/add` to add new city to the database using body for example:
`city_name:Boston
latitude:42.36
longitude:-71.06`

# Weather API - Laravel Developer Test Task

We use [**Open Weather API**](https://openweathermap.org/current) to get current weather data based on latitude/longitude.

- **API Link**: [https://openweathermap.org/current](https://openweathermap.org/current)
