const download = document.getElementById('download-pip')
const view = document.getElementById('view-pip')
const issue = document.getElementById('issue-pip')

download.addEventListener('click',downloadpip)
view.addEventListener('click',viewpip)
issue.addEventListener('click',issuepip)

function downloadpip(e) {
    alert('Redirecting to download...')
    window.location.href='/downloads/python/get-pip.py'
}
function viewpip(e) {
    alert('Redirecting to online viewer...')
    window.location.href='/downloads/python/get-pip.txt'
}
function issuepip(e) {
    alert('Issue Reported!')
=======
const download = document.getElementById('download-pip')
const view = document.getElementById('view-pip')
const issue = document.getElementById('issue-pip')

download.addEventListener('click',downloadpip)
view.addEventListener('click',viewpip)
issue.addEventListener('click',issuepip)

function downloadpip(e) {
    alert('Redirecting to download...')
    window.location.href='/downloads/python/get-pip.py'
}
function viewpip(e) {
    alert('Redirecting to online viewer...')
    window.location.href='/downloads/python/get-pip.txt'
}
function issuepip(e) {
    alert('Issue Reported!')
>>>>>>> e4415e5ce8818db552a4fbf35d3484fb5f1902d0
}
