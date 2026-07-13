<?php

function ewdie($data, $i = true)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
    echo "\n";

    if ($i) {
        die();
    }

}

function setValidation($input_field, $field_msg, $validation)
{
    $ci =& get_instance();
    $ci->form_validation->set_rules($input_field, $field_msg, $validation);
}


function checkConnection($host_name, $port, $time_out = 1)
{
    if ($pf = @fsockopen($host_name, $port, $err_no, $err_str, $time_out)) {
        fclose($pf);
        return true;
    } else {
        return false;
    }
}

function getPost($post)
{
    $ci =& get_instance();
    return $ci->input->post($post, true);
}

function uc_words_rem($str, $search = '_', $replace = " ")
{
    $newstr = str_replace($search, $replace, $str);
    return ucwords($newstr);
}

function sum_subarrays_by_key($arr, $key)
{
    $sum = 0;
    foreach ($arr as $sub_array1) {
        $sum += $sub_array1[$key];
        if (isset($sub_array1['child'])) {
            foreach ($sub_array1['child'] as $sub_array2) {
                $sum += $sub_array2[$key];
                if (isset($sub_array2['child'])) {
                    foreach ($sub_array2['child'] as $sub_array3) {
                        $sum += $sub_array3[$key];
                        if (isset($sub_array3['child'])) {
                            foreach ($sub_array3['child'] as $sub_array4) {
                                $sum += $sub_array4[$key];
                                if (isset($sub_array4['child'])) {
                                    foreach ($sub_array4['child'] as $sub_array5) {
                                        $sum += $sub_array5[$key];
                                        if (isset($sub_array5['child'])) {
                                            foreach ($sub_array5['child'] as $sub_array6) {
                                                $sum += $sub_array6[$key];
                                                if (isset($sub_array6['child'])) {
                                                    foreach ($sub_array6['child'] as $sub_array7) {
                                                        $sum += $sub_array7[$key];
                                                        if (isset($sub_array7['child'])) {
                                                            foreach ($sub_array7['child'] as $sub_array8) {
                                                                $sum += $sub_array8[$key];
                                                                if (isset($sub_array8['child'])) {
                                                                    foreach ($sub_array8['child'] as $sub_array9) {
                                                                        $sum += $sub_array9[$key];
                                                                        if (isset($sub_array9['child'])) {
                                                                            foreach ($sub_array9['child'] as $sub_array10) {
                                                                                $sum += $sub_array10[$key];
                                                                            }
                                                                        }
                                                                    }
                                                                }
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }
    return $sum;
}

/*
$array - nothing to say
$group_keys - columns which have to be grouped - can be STRING or ARRAY (STRING, STRING[, ...])
$sum_keys - columns which have to be summed - can be STRING or ARRAY (STRING, STRING[, ...])
$count_key - must be STRING - count the grouped keys
*/
function array_distinct($array, $group_keys, $sum_keys = NULL, $count_key = NULL)
{
    if (!is_array($group_keys))
        $group_keys = array($group_keys);
    if (!is_array($sum_keys))
        $sum_keys = array($sum_keys);

    $existing_sub_keys = array();
    $output            = array();

    foreach ($array as $key => $sub_array) {
        $puffer = NULL;
        #group keys
        foreach ($group_keys as $group_key) {
            $puffer .= $sub_array[$group_key];
        }
        $puffer = serialize($puffer);
        if (!in_array($puffer, $existing_sub_keys)) {
            $existing_sub_keys[$key] = $puffer;
            $output[$key]            = $sub_array;
        } else {
            $puffer = array_search($puffer, $existing_sub_keys);
            #sum keys
            foreach ($sum_keys as $sum_key) {
                if (is_string($sum_key))
                    $output[$puffer][$sum_key] += $sub_array[$sum_key];
            }
            #count grouped keys
            if (!array_key_exists($count_key, $output[$puffer]))
                $output[$puffer][$count_key] = 1;
            if (is_string($count_key))
                $output[$puffer][$count_key]++;
        }
    }
    return $output;
}

function array_sort($array, $on, $order = SORT_ASC)
{
    $new_array      = array();
    $sortable_array = array();

    if (count((array)$array) > 0) {
        foreach ($array as $k => $v) {
            if (is_array($v)) {
                foreach ($v as $k2 => $v2) {
                    if ($k2 == $on) {
                        $sortable_array[$k] = $v2;
                    }
                }
            } else {
                $sortable_array[$k] = $v;
            }
        }

        switch ($order) {
            case SORT_ASC:
                asort($sortable_array);
                break;
            case SORT_DESC:
                arsort($sortable_array);
                break;
        }

        foreach ($sortable_array as $k => $v) {
            $new_array[$k] = $array[$k];
        }
    }

    return $new_array;
}

function humanTiming($time)
{

    $time   = time() - $time; // to get the time since that moment
    $time   = ($time < 1) ? 1 : $time;
    $tokens = array(
        31536000 => 'year',
        2592000  => 'month',
        604800   => 'week',
        86400    => 'day',
        3600     => 'hour',
        60       => 'minute',
        1        => 'second'
    );

    foreach ($tokens as $unit => $text) {
        if ($time < $unit) continue;
        $numberOfUnits = floor($time / $unit);
        return $numberOfUnits . ' ' . $text . (($numberOfUnits > 1) ? 's' : '');
    }

}
