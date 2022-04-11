node {
    checkout scm

    docker.image('composer:latest')

    stage("Build"){
        sh 'composer install'
    }
    stage("Test"){
        sh '/vendor/bin/phpunit'
    }
}
