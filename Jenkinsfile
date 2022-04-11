node {
    checkout scm

    def imageName = docker.image('composer:latest')

    stage("Build"){
        docker.build(imageName).inside {
            sh 'composer install'
        }
    }
}
