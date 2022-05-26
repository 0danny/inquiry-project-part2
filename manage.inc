  <div class="manage-container">
        <h3 class="subheader">Manage Page</h3>

        <form method="post" action="listall.php" class="manage_form">
            <p>
                <input type="submit" name="all_attempts" class="manage_form_allattempts" value="List All Attempts">
            </p>
        </form>

        <fieldset>
            <legend>Search student by number</legend>
            
            <form method="post" action="search.php" class="manage_form">
            <p>
                <label for="student_number">Enter student number:</label> 
                <input type="text" name="student_number" minlength="7" maxlength="10" pattern=".{7,10}" placeholder="Type student id..."/>
            </p>
            <br>

            <input type="submit" value="Search Student Number Attempt"/>
            </form>

        </fieldset>

        <fieldset>
            <legend>Search student by name</legend>
            <form method="post" action="search.php" class="manage_form">
                <p>
                    <label for="first_name">Enter first name:</label>
                    <input type="text" name="first_name" maxlength="30" pattern="[a-zA-Z]+" placeholder="Type first name..."/>
                </p>
                <p>
                    <label for="last_name">Enter last name:</label>
                    <input type="text" name="last_name" maxlength="30" pattern="[a-zA-Z]+" placeholder="Type last name..."/>
                </p>
                <br>
                <input type="submit" value="Search Student Name Attempt"/>
            </form>
        </fieldset>

        <fieldset>
            <legend>Search student by percentage %</legend>
            <form method="post" action="search100.php" class="manage_form">
                <p>
                    <input type="submit" value="List Students Who Got 100% On Attempt 1" name='100'/>
                </p>
            </form>

            <form method="post" action="search50.php" class="manage_form">
                <p>
                    <input type="submit" value="List Students Who Got Less Than 50% On Attempt 2"/>
                </p>
            </form>
        </fieldset>

        <fieldset>
            <legend>Delete attempt by ID</legend>
            <form method="post" action="delete.php" class="manage_form"> <!-- Links to delete.php -->
                <p>
                    <label for="first_name">Enter student number:</label>
                    <input type="text" name="student_number" minlength="7" maxlength="10" pattern=".{7,10}" placeholder="Type student id..."/>
                </p>
                <br>
                <input type="submit" value="Delete"/>
            </form>
        </fieldset>

        <fieldset>
            <legend>Update student score</legend>
            <form method="post" action="change.php" class="manage_form"> <!-- Links to change.php -->
                <p>
                    <label for="first_name">Enter student number:</label>
                    <input type="text" name="student_number" minlength="7" maxlength="10" pattern=".{7,10}" placeholder="Type student id..."/>
                </p>
                <p>
                    <label for="number_of_attempts">Select attempt number:</label>
                    <input type="number" name="number_of_attempts" min="1" max="2"/>
                </p>
                <br>
                <input type="submit" value="Change Score Of Attempt"/>
            </form>
        </fieldset>
    </div>