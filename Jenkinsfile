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
        try {
            container.inside {
                sh "./vendor/bin/phpunit ${tests_directory}"
            }
            def tests_ran = True
        } catch {
            println "Exception happened. "
            def tests_ran = False
        }
    }

    if (tests_ran) {
        println "Build succeeded"
    } else {
        println "Tests did not run"
    }
}
