<?php
function display_record_table($records)
{
    echo '<div class="table-responsive">';
    echo "<table class=\"table table-striped table-hover table-sm mt-3 table-bordered\">";
    echo '<thead class="table-dark"><tr><th class="bg-primary">Actions</th><th><a href="?sortby=student_id">Student ID</a></th><th><a href="?sortby=first_name">First Name</a></th><th><a href="?sortby=last_name">Last Name</a></th><th><a href="?sortby=email">Email</a></th><th><a href="?sortby=phone">Phone</a></th></thead>';

    foreach ($records as $row) {
        # display rows and columns of data
        echo '<tr>';
        echo "<td><a class='text-decoration-none' href=\"update-record.php?id={$row->id}\">Update</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a class='text-decoration-none' href=\"delete-record.php?id={$row->id}\" onclick=\"return confirm('Are you sure?');\">Delete</a></td>";
        echo "<td>{$row->student_id}</td>";
        echo "<td><strong>{$row->first_name}</strong></td>";
        echo "<td><strong>{$row->last_name}</strong></td>";
        echo "<td>{$row->email}</td>";
        echo "<td>{$row->phone}</td>";
        echo '</tr>';
    } // end while
    echo '</table>';
    echo '</div>';
}
