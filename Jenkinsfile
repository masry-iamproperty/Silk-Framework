node {
    checkout scm

    container = docker.build('composer:latest')

    stage("Build"){
        container.inside {
            sh 'ls -ahl'
            sh 'composer install'
        }
    }
    stage("Test"){
        container.inside {
            sh './vendor/bin/phpunit'
        }
    }

    println "Build succeeded"
}
