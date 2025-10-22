<?php

function sqlAllCustomers(): string
{
    return "
    SELECT *
    FROM customers
    ORDER BY last_name, first_name
    ";
}

function sqlAvailableBikes(): string
{
    return "
    SELECT bike_id, model, type, hourly_rate
    FROM bikes
    WHERE available = 1
    ";
}

function sqlAllBikesByPrice(): string
{
    return "
    SELECT *
    FROM bikes
    ORDER BY hourly_rate DESC
    ";
}

function sqlAllOpenRentals(): string
{
    return "
    SELECT r.rental_id, b.model, c.first_name, c.last_name, r.start_time
    FROM rentals r
    JOIN bikes b ON r.bike_id = b.bike_id
    JOIN customers c ON r.customer_id = c.customer_id
    WHERE r.end_time IS NULL
    ";
}

function sqlJoinRentalsCustomers(): string
{
    return "
    SELECT r.rental_id, r.bike_id, r.start_time, r.end_time, r.total_cost, c.first_name, c.last_name, c.phone, c.email
    FROM rentals r
    JOIN customers c
        ON r.customer_id = c.customer_id
    ";
}

function sqlTop3Bikes(): string
{
    return "
    SELECT bike_id, model, type, hourly_rate
    FROM bikes
    ORDER BY hourly_rate DESC
    LIMIT 3
    ";
}

function sqlMultiJoinRentals(): string
{
    return "
    SELECT *
    FROM rentals r
    JOIN customers c
        ON r.customer_id = c.customer_id
    JOIN bikes b
        ON r.bike_id = b.bike_id
    ";
}

function sqlUpdateCloseRental(): string
{
    return "
    UPDATE rentals
    SET end_time = NOW()
    WHERE rental_id = 3
    ";
}

function sqlUpdateBikeUnavailable(): string
{
    return "
    UPDATE bikes
    SET available = 0
    WHERE bike_id = 4
    ";
}

function sqlCompletedRentals(): string
{
    return "
    SELECT b.model, c.first_name, c.last_name, r.start_time, r.end_time
    FROM rentals r
    JOIN bikes b
        ON r.bike_id = b.bike_id
    JOIN customers c
        ON r.customer_id = c.customer_id
    WHERE r.end_time IS NOT NULL
    ";
}