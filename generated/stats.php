<?php

namespace Safe;

use Safe\Exceptions\StatsException;

/**
 * Returns the covariance of a and b.
 *
 * @param array $a The first array
 * @param array $b The second array
 * @return float Returns the covariance of a and b.
 * @throws StatsException
 *
 */
function stats_covariance(array $a, array $b)
{

    $result = \stats_covariance($a, $b);
    if ($result === false) {
        throw StatsException::createFromPhpError();
    }
    return $result;
}


/**
 * Returns the standard deviation of the values in a.
 *
 * @param array $a The array of data to find the standard deviation for. Note that all
 * values of the array will be cast to float.
 * @param bool $sample Indicates if a represents a sample of the
 * population; defaults to FALSE.
 * @return float Returns the standard deviation on success; FALSE on failure.
 * @throws StatsException
 *
 */
function stats_standard_deviation(array $a, $sample = false)
{

    $result = \stats_standard_deviation($a, $sample);
    if ($result === false) {
        throw StatsException::createFromPhpError();
    }
    return $result;
}


/**
 * Returns the Pearson correlation coefficient between arr1 and arr2.
 *
 * @param array $arr1 The first array
 * @param array $arr2 The second array
 * @return float Returns the Pearson correlation coefficient between arr1 and arr2.
 * @throws StatsException
 *
 */
function stats_stat_correlation(array $arr1, array $arr2)
{

    $result = \stats_stat_correlation($arr1, $arr2);
    if ($result === false) {
        throw StatsException::createFromPhpError();
    }
    return $result;
}


/**
 * Returns the inner product of arr1 and arr2.
 *
 * @param array $arr1 The first array
 * @param array $arr2 The second array
 * @return float Returns the inner product of arr1 and arr2.
 * @throws StatsException
 *
 */
function stats_stat_innerproduct(array $arr1, array $arr2)
{

    $result = \stats_stat_innerproduct($arr1, $arr2);
    if ($result === false) {
        throw StatsException::createFromPhpError();
    }
    return $result;
}


/**
 * Returns the variance of the values in a.
 *
 * @param array $a The array of data to find the standard deviation for. Note that all
 * values of the array will be cast to float.
 * @param bool $sample Indicates if a represents a sample of the
 * population; defaults to FALSE.
 * @return float Returns the variance on success; FALSE on failure.
 * @throws StatsException
 *
 */
function stats_variance(array $a, $sample = false)
{

    $result = \stats_variance($a, $sample);
    if ($result === false) {
        throw StatsException::createFromPhpError();
    }
    return $result;
}
