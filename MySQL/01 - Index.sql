# - Can you explain what's an index and its purpose ?
# - Does every index are making performance better ?

# According to those fields in  a table
# - first_name
# - last_name
# - country
# With a "multi column index" set on those fields : first_name, country
# Will the following request use index ?
SELECT first_name FROM table_name;

# Will the following request use index ?
SELECT country, first_name FROM table_name;