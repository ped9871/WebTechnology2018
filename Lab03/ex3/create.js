let image = document.createElement('img');
image.src = 'bills.jpg';

let skill = document.createElement('p');
let skillBold = document.createElement('b');
let skillTitle = document.createTextNode('My skills.');

skillBold.appendChild(skillTitle);
skill.appendChild(skillBold);

let skillList = document.createElement('ul');
let skillChild = document.createElement('li');
let skills = ['Visual C++ Programming', 'Python Programming'];

skills.forEach(skill => {
  let text = document.createTextNode(skill);
  skillChild = document.createElement('li');
  skillChild.appendChild(text);
  skillList.appendChild(skillChild);
});

document.body.appendChild(image);
document.body.appendChild(skill);
document.body.appendChild(skillList);
