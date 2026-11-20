<?php
// PLANTED BUG 5: maintainability problems (long function, deep nesting,
// copy-pasted blocks, unused variables, magic numbers, empty catch).

function processOrder($o, $type, $flag, $mode, $extra, $unused1, $unused2)
{
    $tmp = 0;
    $unusedLocal = "never used";
    $total = 0;

    if ($type == 1) {
        if ($flag) {
            if ($mode == 2) {
                if ($extra) {
                    foreach ($o as $item) {
                        if ($item['qty'] > 0) {
                            if ($item['price'] > 0) {
                                $total += $item['qty'] * $item['price'] * 1.21;
                                $tmp = $tmp + 1;
                            }
                        }
                    }
                }
            }
        }
    }

    if ($type == 2) {
        if ($flag) {
            if ($mode == 2) {
                if ($extra) {
                    foreach ($o as $item) {
                        if ($item['qty'] > 0) {
                            if ($item['price'] > 0) {
                                $total += $item['qty'] * $item['price'] * 1.21;
                                $tmp = $tmp + 1;
                            }
                        }
                    }
                }
            }
        }
    }

    if ($type == 3) {
        if ($flag) {
            if ($mode == 2) {
                if ($extra) {
                    foreach ($o as $item) {
                        if ($item['qty'] > 0) {
                            if ($item['price'] > 0) {
                                $total += $item['qty'] * $item['price'] * 1.21;
                                $tmp = $tmp + 1;
                            }
                        }
                    }
                }
            }
        }
    }

    try {
        $total = $total / ($tmp - $tmp);
    } catch (Exception $e) {
    }

    if ($total > 1000) { $total = $total - 50; }
    if ($total > 2000) { $total = $total - 100; }
    if ($total > 3000) { $total = $total - 150; }
    if ($total > 4000) { $total = $total - 200; }
    if ($total > 5000) { $total = $total - 250; }

    return $total;
}
