# Quizknown
Quizknown is system that help teachers and students make exams to test their knowledge. Quizknown has own routing system and is near MVC system. I made this system because I want to train for final exams. I hope that any other can use this system so I made this project open source. So everyone can contribute to make it better. 

<b>TODO<b>  
- [x] core
- [ ] KaText fully function
- [ ] dark/ligh mode switch

## How to use it
If you want ton deploy this system you need to simply download source and extract to your hosting . You need apache 2  to run this without security issues because htaccess. Head to files to know how to make exercices and groups

## Files 
There is json file named groups.json which contain entry info about groups or subjects for exercices. 

Here is example of groups.json: 
```json
{
    "technology": [{

        "group_name":"Technologie",
        "group_folder":"technologie"
    }], 
    "elektrotechnics": [{

        "group_name":"Elektrotechnika",
        "group_folder":"elektrotechnika"
    }]
}
```

Each group has identifier as string and this each group has following properties:  
group_name- name of group that is displayed on the web  
group_folder - name of folder that is used to store group.json and exercices 

group.json store information about exercices,name and file

Example of group.json:  
```json
{
    "odpor": [{

        "name":"Odpor",
        "file":"odpor.json"
    }], 
    "elektrotechnics": [{

        "name":"Proud",
        "file":"proud.json"
    }]
}
```
and it has following properties:  
name - name that is displayd on the web  
file - point to file where is exercise stored

### File of exercise

Example of exercise json file:
```json
{
    "num" : "2",
    "0": [{
        "question" : "Výpočet odporu 2 rezistorů v sériovém řazení",
        "answers_num" : "2",
        "answers" : [
            {
                "type" : "text",
                "value" : "R = 1/R1 + 1/R2",
                "correct" : "false"
            }, {
                "type" : "text",
                "value" : "R = R1 + R2",
                "correct" : "true"
            } 
        ]
    }], 
    "1": [{
        "question": "Výpočet odporu 2 rezistorů v pararelním řazení",
        "answers_num" : "2",
        "answers" : [
            {
                "type" : "text",
                "value" : "R = R1*R2/R1+R2",
                "correct" : "true"
            }, {
                "type" : "text",
                "value" : "R = R1 + R2",
                "correct" : "false"
            }
        ]
    }]
}
```
properties of exercise file:  
num - contain number of questions  
question - question in literall form  
answer_num - number of answers

properties of answers: 
type - set type of answer(image,text)  
value - if type is text then it is literall answer,if image then it store url of image,preffered image size is 100x100  
correct - set if this answer is correct or not(true/false)

### Folder hiearchy 
/ - root of site  
/app - application data
/app/content - store groups and exercies and their info 
/app/controllers/ - controllers of site  
/app/template/ - templates of site  
/app/langs/ - used to store translations
/static/ - static files of site  
/static/css/ - used to store cascade styles  
/static/img/ - used to store images
