# Examining Effects of Body Weight Bias and Gender Bias in Hiring Decisions
### Psychology 100B – Fall 2017

Author: (c) Shawn Tyler Schwartz, 2017
<br />
Website: [https://shawntylerschwartz.com](https://shawntylerschwartz.com)
<br />
Executable Experiment Site: [https://psych.shawntylerschwartz.com/psych100b](https://psych.shawntylerschwartz.com/psych100b)
<br />

**WARNING:** This experiment is sole property of Shawn Tyler Schwartz and associated groups in the Psychology Department at the **University of California, Los Angeles (UCLA)**. *Unauthorized use, plaigarism, or other acts of improper academic **disonesty** are prohibited and will be reported as this experimental code isn't authorized to be executed except by Shawn Tyler Schwartz*

# Abstract
Differences in gender and weight were examined in perceived hire-ability ratings, in the context of potential job applicants and how ideally suitable for the job they are. Normal weight females received higher hire-ability ratings than overweight females. Females were also more likely to be hired than males, regardless of weight. In contrast, normal weight males revealed hire-ability scores not significant to differences in scores obtained by overweight males applying for the same job. Together, these findings suggest that intraspecific gender discrimination for weight in females, during the earliest stages of the hiring process––analysis of the resume––may be affecting fair hiring practices for qualified job applicants.
<br />
<br />
&nbsp;&nbsp;&nbsp;&nbsp;*Keywords: resume, hiring biases, gender, normal weight, overweight, workplace, equality*

# Results
![APA Style Graph](https://psych.shawntylerschwartz.com/CASPsych100BExpGraph.png "Figure 1")
*Figure 1.* Mean hire-ability rating values (%) representing overall perceived suitability for each 
target applicant CV. No significant interaction was round in the gender-weight effects on hire-
ability ratings for target CVs. Standard errors are represented in the figure by the error bars 
attached to each column.

# References
* Alfonso, I. (1997). The effects of weight on employment decisions in a variety of job settings (doctoral thesis). The Florida State University, Florida, United States. https://search.proquest.com/docview/304386689?accountid=14512  
* Correll, S., Benard, S., & Paik, I. (2007). Getting a job: Is there a motherhood penalty? American Journal of Sociology, 112(5), 1297-1338. https://doi.org/10.1086/511799 
* de Leeuw, J. R. (2015). jsPsych: A JavaScript library for creating behavioral experiments in a web browser. Behavior Research Methods, 47(1), 1-12. https://doi.org/10.3758/s13428-014-0458-y
* Flint, S. W., Čadek, M., Codreanu, S. C., Ivić, V., Zomer, C., & Gomoiu, A. (2016). Obesity discrimination in the recruitment process: “You’re Not Hired!”. Frontiers in Psychology, 7(647), 1-9. https://doi.org/10.3389/fpsyg.2016.00647 
* Tyler, J. M., & McCullough, J. D. (2009). Violating prescriptive stereotypes on job resumes: A self-presentational perspective. Management Communication Quarterly, 23(2), 272-287. https://doi.org/10.1177/089331890341412

<hr />

&copy; Shawn Tyler Schwartz, 2017
<br />
*Examining Effects of Body Weight Bias and Gender Bias in Hiring Decisions*
<br />
*Shawn T. Schwartz, Claire M. Locke, and Ali E. Hepps*
<br />
*University of California, Los Angeles*
<br />

<hr />

**Main Execution Script**
```javascript
jsPsych.init({
      display_element: $('#jspsych-target'),
      timeline: [intro_instructions_block, consent_block, questions_block_one, questions_block_two, questions_block_three, questions_block_four, questions_block_five, questions_block_six, questions_block_seven, likert_block_one, likert_block_two, likert_block_three, likert_block_four, post_survey_instructions_block, resume_female_normalweight, likert_resume_one, likert_resume_two, likert_resume_three, likert_resume_four, likert_resume_five, likert_resume_six, nw_f_suitability, resume_male_overweight, likert_resume_one, likert_resume_two, likert_resume_three, likert_resume_four, likert_resume_five, likert_resume_six, ow_m_suitability, resume_male_normalweight, likert_resume_one, likert_resume_two, likert_resume_three, likert_resume_four, likert_resume_five, likert_resume_six, nw_m_suitability, resume_female_overweight, likert_resume_one, likert_resume_two, likert_resume_three, likert_resume_four, likert_resume_five, likert_resume_six, ow_f_suitability],
      on_finish: function(data){ saveData(starRaymond, jsPsych.data.dataAsCSV()); }
    });
```
**Main Saving Script**
```php
    var bls_output = "BLS_GROUP_A/B/C/D-X-Y-";
    var rand_output = random();
    var the_dot = ".";
    var csv_name = "csv";
    
    var starRaymond = bls_output + rand_output + the_dot + csv_name;
    
    function saveData(filename, filedata){
      $.ajax({
        type:'post',
        cache: false,
        url: 'save_data.php', // this is the path to the above PHP script
        data: {filename: filename, filedata: filedata}
      });
    };
```

