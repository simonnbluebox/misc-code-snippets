# Blubox Bugs/Issues Investigations Procedure

1. [] Check that you have all the required information from Lisa L and/or Malcolm Brown (contact details?) before proceeding (attachments, screenshots, etc. mentioned, but not provided). I might need to come back to this if found to be otherwise during investigation.
2. [] Confirm that this is a task that I can fix. (Some tasks require access to engine code, which I don't have. Others are in custom module code, to which I do.) Look at the screenshots and error logs to determine where the issue lies, to determine where to look. (I might need to come back to this during investigation.)
3. [] Try to replicate the issue on a/the **test** environment (since I don't currently have access to the live one).
4. [] Check the error logs.
5. [] Fix the issue, if possible, or report problems in doing so to Darryl and/or Quintin.
6. [] Test the fix (at least five times). Record the process and results, for feedback.
7. [] Commit your work to a dev/testing branch, so that it may be checked/verified by someone else.
8. [] Record the time required to complete the task.
9. [] Provide detailed feedback to Darryl and Lisa, including time taken and evidence of fixing the issue.
10. Return to step 1 if there is another task to do.

## Replicating the Error

1. Log into the appropriate test Website/system
2. Use the menu to navigate to the appropriate LP.
3. Perform necessary actions to replicate/trigger the issue, as described by the customer/user.
4. Take any necessary screenshots, etc., to document the process (including errors).
5. If applicable, examine the error logs.

## Accessing Error Logs

1. Copy the error ID from the error message.
2. From the module menu on the left, navigate to Admin &gt; Errors &gt; Error Log
3. Paste the error's ID into the input field and click the <kbd>View</kbd> button.
4. Click the applicable <a>[View]</a> links to see more detail (for each of backtrace, post data and extra data columns).
5. Record any info necessary for examining and fixing the bug/issue in the source code.
6. Return to investigation procedure at the relevant step (probably 5).
