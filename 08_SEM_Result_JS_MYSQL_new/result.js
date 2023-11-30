document.addEventListener("DOMContentLoaded", function () {
    const calculateButton = document.getElementById("calculate-button");
    const mseMarksInput = document.getElementById("mse-marks");
    const eseMarksInput = document.getElementById("ese-marks");
    const resultDiv = document.getElementById("result");

    calculateButton.addEventListener("click", function () {
        const mseMarks = parseFloat(mseMarksInput.value);
        const eseMarks = parseFloat(eseMarksInput.value);

        const totalMarks = 0.3 * mseMarks + 0.7 * eseMarks;
        let grade;
        if(totalMarks >90){
            grade = 'A+';
        }
        else if(totalMarks >=80){
            grade = 'A';
        }
        else if(totalMarks <80 && totalMarks >=70){
            grade = 'B+'
        }
        else if(totalMarks <70 && totalMarks >=60){
            grade = 'B'
        }
        else if(totalMarks <60 && totalMarks >=50){
            grade = 'C'
        }
        else{
            grade = "ATKT"
        }

        resultDiv.innerText = ` Marks obtained: ${totalMarks} 
        Grade obtained: ${grade}`;
        
    });

    

});

