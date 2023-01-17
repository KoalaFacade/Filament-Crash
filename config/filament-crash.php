<?php

return [
    /*
     | --------------------------------------------------------------------
     | Due date
     | --------------------------------------------------------------------
     |
     | the due date when the crashing will begin
     | supported format: YYYY-MM-DD
     */
    'due_date' => env(key: 'DUE_DATE'),

    /*
     | --------------------------------------------------------------------
     | Deadline after due date
     | --------------------------------------------------------------------
     |
     | Deadline before the page fully crashed
     | day number Ex. 10. it will fully crash in 10 days after due date
     */
    'deadline_after_due_date' => env(key: 'DEADLINE_DAYS', default: 10),
];
