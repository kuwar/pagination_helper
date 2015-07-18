# pagination_helper
A simple pagination helper for codeigniter using bootstrap pagination class

#Instructions
First load pagination library in controller
Load the pagination helper file

Call the function and pass parameters $uri, $total_rows, $per_page, $segment
$segment = The pagination function determines which segment of your URI contains the page number.
$per_page = Number of rows to display per page.
$total_rows = Total number of rows. Get this by count total number of rows of a table you want to paginate.
$uri = This is the full URI to the controller class/function containing pagination. 
