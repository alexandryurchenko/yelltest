SELECT `type`, MAX(`date`) as `date`, `value` FROM `table_name` GROUP BY `type`;