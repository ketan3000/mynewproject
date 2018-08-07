1.Create a repositories in github or bigbucket and create a project in your repositories this
example : https://github.com/ketan3000/mynewproject.git

2. Clone the file in the local system:
command : git clone https://github.com/ketan3000/mynewproject.git


if branch you are created then run below command: 
git clone -b sradha https://github.com/ketan3000/mynewproject.git

3: Check the branch

command : git branch

4: Change the branch:

git checkout branch_name

5: git status //// check the status 

5: git add . ////// adds / stages all of the files in the current directory

6: git commit -m "commit"

7: git push or git push origin branch_name // push the code in the repositories

===============================================================================

How to pull file from the github server:

git pull origin branch_name

Git mergetool:
================
https://gist.github.com/tony4d/3454372  

ketankumar@DESKTOP-OQIQPS3 MINGW64 /c/xampp/htdocs/mynewproject (master|MERGING)

Run below command:

1: git mergetool :
Normal merge conflict for 'index.php':
  {local}: modified file
  {remote}: modified file
/mingw64/libexec/git-core/git-mergetool--lib: line 128: C:/Program: No such file or directory
index.php seems unchanged.
Was the merge successful [y/n]? Once you modify the code the enter : y

2: git commit -m "merge commit"

3: git push


How to Setup in AWS or Other linux server

sudo apt-get update
sudo apt-get install git

git config --global user.name "Your Name"
git config --global user.email "youremail@domain.com"

Go to your folder path

git init

git clone https://github.com/ketan3000/mynewproject.git





