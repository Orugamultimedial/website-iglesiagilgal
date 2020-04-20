function createUser() {
    element = document.getElementById('create_user');

    if (element.style.display == 'none') {
        element.style.display = 'block';
    } else {
        element.style.display = 'none';
    };

};

function modifyActivities() {
    activities = document.getElementById('container_existingactivities');

    if (activities.style.display == 'none') {
        activities.style.display = 'block';
    } else {
        activities.style.display = 'none';
    };

};

function showFacebookUrl() {
    facebookUrl = document.getElementById('container_facebok_live_url');

    switch (facebookUrl.style.display) {
        case 'none':
            facebookUrl.style.display = 'block';
            break;
        case 'block':
            facebookUrl.style.display = 'none';

        default:
            facebookUrl.style.display = 'none';
            break;
    };
};