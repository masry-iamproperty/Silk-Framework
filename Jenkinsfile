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
        def tests_directory = 'tests/'
        container.inside {
            sh "./vendor/bin/phpunit ${tests_directory}"
        }
    }

    println "Build succeeded"
}
