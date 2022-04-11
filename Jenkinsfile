node {
    checkout scm

    docker.build('composer:latest')

    stage("Build"){
        sh 'composer install'
    }
    stage("Test"){
        sh '/vendor/bin/phpunit'
    }
}
