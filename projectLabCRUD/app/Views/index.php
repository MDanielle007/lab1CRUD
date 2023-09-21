<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
    <!-- Content here -->
        <div class="container mt-2 col-8">
            <form class="row g-4" action="/save" method="post">
                <input type="hidden" name="id" value="<?=$studentToEdit['id']?? ''?>">
                <div class="col-4">
                    <label for="studentID" class="form-label">Student ID</label>
                    <input type="text" class="form-control" id="studentID" name="studentID" placeholder="MCC..." value="<?=$studentToEdit['StudID'] ?? ''?>">
                </div>
                <div class="col-12">
                    <label for="studentName" class="form-label">Student Name</label>
                    <input type="text" class="form-control" id="studentName" name="studentName" placeholder="Enter Full Name" value="<?=$studentToEdit['StudName'] ?? ''?>">
                </div>
                
                <div class="col-md-3">
                    <label for="studentGender" class="form-label">Gender</label>
                    <select id="studentGender" class="form-select" name="studentGender">
                        <option value="" <?= empty($studentToEdit['StudGender']) ? 'selected' : '' ?>>Choose Gender
                        </option>
                        <?php foreach ($genders as $gender): ?>
                            <option value="<?= $gender ?>" <?= ($gender == ($studentToEdit['StudGender'] ??  '')) ? 'selected' : '' ?>>
                                <?= $gender ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="col-md-3">
                    <label for="studentCourse" class="form-label">Course</label>
                    <input type="text" class="form-control" id="studentCourse" name="studentCourse" placeholder="Enter Course" value="<?=$studentToEdit['StudCourse'] ?? ''?>">
                </div>

                <div class="col-md-3">
                    <label for="studentSection" class="form-label">Section</label>

                    <select id="studentSection" class="form-select" name="studentSection">
                        <option value="" <?= empty($studentToEdit['StudSection']) ? 'selected' : '' ?>>Choose Section</option>
                        <?php foreach ($sections as $section): ?>
                            <option value="<?= $section['Section'] ?>" <?= ($section['Section'] == ($studentToEdit['StudSection'] ?? '')) ? 'selected' : '' ?>>
                                <?= $section['Section'] ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="col-md-3">
                    <label for="inputState" class="form-label">Year Level</label>
                    <select id="inputState" class="form-select" name="studentYear">
                        <option value="" <?= empty($studentToEdit['StudYear']) ? 'selected' : '' ?>>Choose Year</option>
                        <option value="1st Year" <?= ($studentToEdit['StudYear'] ?? '') === '1st Year' ? 'selected' : '' ?>>1st Year</option>
                        <option value="2nd Year" <?= ($studentToEdit['StudYear'] ?? '') === '2nd Year' ? 'selected' : '' ?>>2nd Year</option>
                        <option value="3rd Year" <?= ($studentToEdit['StudYear'] ?? '') === '3rd Year' ? 'selected' : '' ?>>3rd Year</option>
                        <option value="4th Year" <?= ($studentToEdit['StudYear'] ?? '') === '4th Year' ? 'selected' : '' ?>>4th Year</option>
                    </select>
                </div>
                
                <div class="col-12 d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary col-2">Save</button>
                </div>
            </form>
        </div>
        

        <table class="table mt-2">
            <thead>
                <tr>
                    <th scope="col">Student ID</th>
                    <th scope="col">Student Name</th>
                    <th scope="col">Student Gender</th>
                    <th scope="col">Student Course</th>
                    <th scope="col">Student Section</th>
                    <th scope="col">Student Year</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($students as $student):?>
                <tr>
                    <td><?=$student['StudID']?></td>
                    <td><?=$student['StudName']?></td>
                    <td><?=$student['StudGender']?></td>
                    <td><?=$student['StudCourse']?></td>
                    <td><?=$student['StudSection']?></td>
                    <td><?=$student['StudYear']?></td>
                    <td>
                        <a href="/edit/<?=$student['id']?>" type="button" class="btn btn-primary">Edit</a>
                        <a href="/delete/<?=$student['id']?>" type="button" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
